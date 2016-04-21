<?php
class bpmController extends Controller
{
    public function __construct() {
        parent::__construct();
        /*$this->_group = $this->loadModel('group');
        $this->_status = $this->loadModel('status');
        $this->_groupuser = $this->loadModel('groupuser');
         $this->_user = $this->loadModel('user');
         $this->_acl->acceso('admin_access');*/
    }

    public function index(){
    	$this->_view->assign('titulo', 'home');
    }

    public function home(){
    	$this->_view->assign('titulo', 'home');
    	$this->_view->renderizar('home', 'bpm');
    	$this->_view->setJson(array('app-data'));
    }

    public function access(){
    	$this->_view->renderizar('access', 'bpm');

    }

    public function grant(){
    	if (! empty($_GET['error'])) {
		   print_r($_GET);
		   die();
		}

		$tales=$_GET['code'];
		echo $tales;
		 
		$apiServer = "http://sgd.obelisksoft.com/api/1.0/migiro/oauth2"; 
		$endpoint = "/token";
		$appData = json_decode(file_get_contents(ROOT . 'uploads'. DS ."app-data.json"), true);
		 
		$postParams = array(
		    'grant_type' => 'authorization_code',
		    'code' => $_GET['code']
		);

		print_r($postParams);
		 
		$ch = curl_init($apiServer . $endpoint);
		 
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_USERPWD, $appData['client_id'] . ":" . $appData['client_secret']);
		curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		 
		$result = curl_exec($ch);
		$data = json_decode($result, true);
		curl_close($ch);
		 
		if (isset($data["access_token"])) {
		   file_put_contents(ROOT . 'uploads'. DS ."app-data.json", json_encode(array_merge($appData, $data)));
		   header("location: /bpm/cases/");
		} else {
		   print ("<font color=red>No access token returned from $endpoint</font>" .
      "Check the direction, the Client ID '{$appData['client_id']}' and Client Secret '{$appData['client_secret']}'.");
		}
		$this->_view->renderizar('grant', 'bpm');
    }

    public function cases(){
    	$this->_view->renderizar('cases', 'bpm');
    }

    public function todolist(){
    	$this->_view->setJs(array('cases'));
    	$this->_view->renderizar('todolist', 'bpm');
    }

    public function drafts(){
    	$this->_view->setJs(array('drafts'));
    	$this->_view->renderizar('drafts', 'bpm');
    }

    public function newCase(){
    	$apiServer = "http://192.168.0.43/api/1.0/workflow/oauth2"; 
		$endpoint = "/token";
		$appData = json_decode(file_get_contents(ROOT . 'uploads'. DS ."app-data.json"), true);
		print_r($appData['access_token']);

    	$aVars = array(
		   'pro_uid'   => '71388417954df6f7221b269063439028',
		   'tas_uid'   => '22682430354df745938aef0069391753'
		);
		$oRet = $this->pmRestRequest('POST', '/api/1.0/workflow/cases', $aVars,$appData['access_token']);
		//http://192.168.0.43/api/1.0/workflow/
		 
		if ($oRet->status == 200) {
		   print "New Case {$oRet->response->app_number} created.\n";
		}
		$this->_view->renderizar('newCase', 'bpm');
    }

    public function login(){
    	if($_POST){


    	$error = "";
		if (!isset($_POST['client_id']))
		   $error = "No credentials POSTed to access ProcessMaker REST.";
		elseif ($_POST['client_id'] == "" or $_POST['client_secret'] == "")
		   $error = ("No client ID or secret specified to get authorization from ProcessMaker OAuth.");
		elseif ($_POST['username'] == "" or $_POST['password'] == "")
		   $error = ("No username or password specified to login to ProcessMaker.");
		 
		if ($error) {
		   header('location: loginForm.php?error=' . urlencode($error)); //pass error so login screen can display it to user.
		   die();
		}
		 
		$oToken = $this->pmRestLogin($_POST['client_id'], $_POST['client_secret'], $_POST['username'], $_POST['password']);
		if (isset($oToken) and isset($oToken->access_token)) {
		   //can now call REST endpoints using $oToken->access_token
		   $oRet = $this->pmRestRequest("GET", "/api/1.0/migiro/users", null, $oToken->access_token);
		}
		 //print_r($oRet);
		 if($oRet->status!=200){
		 	echo "error";
		 }else{
		 				 		 header ("Location: http://bpm.obelisksoft.com/sysmigiro/es/neoclassic/cases/main");
		 	 //$this->redireccionar('http://bpm.obelisksoft.com/sysmigiro/es/neoclassic/setup/main');
		 }
	}
		
    	$this->_view->renderizar('login', 'bpm');

    }

    public function pmRestLogin($clientId, $clientSecret, $username, $password){
    	$pmServer    = 'http://bpm.obelisksoft.com';
		$pmWorkspace = 'migiro';

    	global $pmServer, $pmWorkspace;
		   $postParams = array(
		      'grant_type'    => 'password',
		      'scope'         => '*',       //set to 'view_process' if not changing the process
		      'client_id'     => $clientId,
		      'client_secret' => $clientSecret,
		      'username'      => $username,
		      'password'      => $password
		   );
		 
		   $ch = curl_init("http://bpm.obelisksoft.com/migiro/oauth2/token");
		   echo $ch;

		   curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		   curl_setopt($ch, CURLOPT_POST, 1);
		   curl_setopt($ch, CURLOPT_POSTFIELDS, $postParams);
		   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 
		   $oToken = json_decode(curl_exec($ch));
		   $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		   curl_close($ch);
		 
		   if ($httpStatus != 200) {
		      print "Error in HTTP status code: $httpStatus\n";
		      return null;
		   }
		   elseif (isset($oToken->error)) {
		      print "Error logging into $pmServer:\n" .
		         "Error:       {$oToken->error}\n" .
		         "Description: {$oToken->error_description}\n";
		   }
		   else {
		      //At this point $oToken->access_token can be used to call REST endpoints.
		 
		      //If planning to use the access_token later, either save the access_token
		      //and refresh_token as cookies or save them to a file in a secure location.
		 
		      //If saving them as cookies:
		      setcookie("access_token",  $oToken->access_token,  time() + 3600);
		      setcookie("refresh_token", $oToken->refresh_token); //refresh token doesn't expire
		      setcookie("client_id",     $clientId);
		      setcookie("client_secret", $clientSecret);
		 
		      //If saving to a file:
		      //file_put_contents("/secure/location/oauthAccess.json", json_encode($tokenData));
		   }
		 
		   return $oToken; 
	}


	public function pmRestRequest($method, $endpoint, $aVars = null, $accessToken=null) {
		$pmServer='http://bpm.obelisksoft.com';
		  global $pmServer;
		 
		  if (empty($accessToken) and isset($_COOKIE['access_token']))
		     $accessToken = $_COOKIE['access_token'];
		 
		  if (empty($accessToken)) { //if the access token has expired
		     //To check if the PM login session has expired: !isset($_COOKIE['PHPSESSID'])
		     header("Location: /bpm/login/"); //change to match your login method
		     die();
		  }
		 
		  //add beginning / to endpoint if it doesn't exist:
		  if (!empty($endpoint) and $endpoint[0] != "/")
		     $endpoint = "/" . $endpoint;
		 
		  $ch = curl_init('http://bpm.obelisksoft.com/api/1.0/migiro/users');
		  
		  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer " . $accessToken));
		  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		  $method = strtoupper($method);
		 
		  switch ($method) {
		     case "GET":
		        break;
		     case "DELETE":
		        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		        break;
		     case "PUT":
		        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		     case "POST":
		        curl_setopt($ch, CURLOPT_POST, 1);
		        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($aVars));
		        break;
		     default:
		        throw new Exception("Error: Invalid HTTP method '$method' $endpoint");
		        return null;
		  }


		 
		  $oRet = new StdClass;
		  $oRet->response = json_decode(curl_exec($ch));
		  $oRet->status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		  curl_close($ch);

		 if ($oRet->status == 401) { //if session has expired or bad login:
		     header("Location: /bpm/login/"); //change to match your login method
		     die();  
		  }
		  elseif ($oRet->status != 200 and $oRet->status != 201) { //if error
		     if ($oRet->response and isset($oRet->response->error)) {
		        print "Error in $pmServer:\nCode: {$oRet->response->error->code}\n" .
		              "Message: {$oRet->response->error->message}\n";
		     }
		     else {
		        print "Error: HTTP status code: $oRet->status\n";
		     }
		  }
		 
	  return $oRet;
	}
}
?>