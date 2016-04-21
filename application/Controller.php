<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * Controller.php
 * -------------------------------------
 */
//require_once ROOT . 'libs' . DS . 'streams.php';
//require_once ROOT . 'libs' . DS . 'gettext.php';

//$user_locale = 'es_Es';
//$locale_file = new FileReader("/var/www/html/myfile/traslation/$user_locale/obelisksoft.mo");
//$locale_fetch = new gettext_reader($locale_file);

//$locle_lang = 'es_ES';
//$locale_file = new FileReader(ROOT.'traslation/$locle_lang/obelisksoft.es.mo');
//$locale_fetch = new gettext_reader($locale_file);

abstract class Controller
{
    protected $_view;
    protected $_acl;
    private $_db;
    
    public function __construct() {
        $this->_acl =  new ACL();
        $this->_view = new View(new Request, $this->_acl);
        $this->_db = new Database();
    }
    
    abstract public function index();
    
    protected function loadModel($modelo)
    {
        $modelo = $modelo . 'Model';
        $rutaModelo = ROOT . 'models' . DS . $modelo . '.php';
        
        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else {
            throw new Exception('Error de modelo');
        }
    }
    
    protected function getLibrary($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . $libreria . '.php';
        
        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }
        else{
            throw new Exception('Error de libreria');
        }
    }

     protected function getLibrarySmart($libreria)
    {
        $rutaLibreria = ROOT . 'libs' . DS . 'lib' . DS . $libreria . '.php';
        
        if(is_readable($rutaLibreria)){
            require_once $rutaLibreria;
        }
        else{
            throw new Exception('Error de libreria');
        }
    }
    
    protected function getTexto($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = htmlspecialchars($_POST[$clave], ENT_QUOTES);
            return $_POST[$clave];
        }
        
        return '';
    }

    protected function getTextMin($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){           
            return strtolower($_POST[$clave]);
        }
    }

    protected function getTextMay($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){           
            return strtoupper($_POST[$clave]);
        }
    }
    
    protected function getInt($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = filter_input(INPUT_POST, $clave, FILTER_VALIDATE_INT);
            return $_POST[$clave];
        }
        
        return 0;
    }

    protected function getIntGet($clave)
    {
        if(isset($_GET[$clave]) && !empty($_GET[$clave])){
            $_GET[$clave] = filter_input(INPUT_GET, $clave, FILTER_VALIDATE_INT);
            return $_GET[$clave];
        }
        
        return 0;
    }
    
    protected function redireccionar($ruta = false)
    {
        if($ruta){
            header('location:' . BASE_URL . $ruta);
            exit;
        }
        else{
            header('location:' . BASE_URL);
            exit;
        }
    }

    protected function filtrarInt($int)
    {
        $int = (int) $int;
        
        if(is_int($int)){
            return $int;
        }
        else{
            return 0;
        }
    }
    
    protected function getPostParam($clave)
    {
        if(isset($_POST[$clave])){
            return $_POST[$clave];
        }
    }
    
    protected function getSql($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = strip_tags($_POST[$clave]);
            
            if(!get_magic_quotes_gpc()){
                $_POST[$clave] = mysql_escape_string($_POST[$clave]);
            }
            
            return trim($_POST[$clave]);
        }
    }

    protected function getSqlMin($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = strip_tags($_POST[$clave]);
            
            if(!get_magic_quotes_gpc()){
                $_POST[$clave] = mysql_escape_string($_POST[$clave]);
            }
            
            return strtolower(trim($_POST[$clave]));
        }
    }


    
    protected function getAlphaNum($clave)
    {
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
        
    }

    protected function getGetAlphaNum($clave)
    {
        if(isset($_Get[$clave]) && !empty($_GET[$clave])){
            $_GET[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_GET[$clave]);
            return trim($_GET[$clave]);
        }
        
    }
    
    public function validarEmail($email)
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return false;
        }
        
        return true;
    }

    public function getAphaNumMay($clave){
        if(isset($_Get[$clave]) && !empty($_GET[$clave])){
            $_GET[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_GET[$clave]);
            return strtoupper(trim($_GET[$clave]));
        }
    }

    public function getAphaNumMin($clave){
      if(isset($_Get[$clave]) && !empty($_GET[$clave])){
            $_GET[$clave] = (string) preg_replace('/[^A-Z0-9_]/i', '', $_GET[$clave]);
            return strtolower(trim($_GET[$clave]));
        }
    }

    public function __($text){

        //$language=LANGUAGE;
      $language=Session::get('language');
       putenv("LC_ALL=$language");
       setlocale(LC_ALL, $language);
       bindtextdomain("messages", ROOT."traslation/locate");
       bind_textdomain_codeset( "messages", 'UTF-8');
       textdomain("messages");


        //global $locale_fetch; 
        return _($text);
        //return gettext($text) ;


        
    }

     //set to address of the ProcessMaker server
 
    /*Function to call a ProcessMaker REST endpoint and return the HTTP status code and 
    response if any. 
    Parameters:
     $method:      HTTP method: "GET", "POST", "PUT" or "DELETE"
     $endpoint:    The PM endpoint, not including the server's address and port number. 
                   Ex: "/api/1.0/workflow/cases"
     $aVars:       Optional. Associative array containing the variables to use in the request 
                   if "POST" or "PUT" method. 
     $accessToken: Optional. The access token, which comes from oauth2/token. If not defined
                   then uses the access token in $_COOKIE['access_token']
    Return Value:
     object { 
        response: Response from REST endpoint, decoded with json_decode(). 
        status:   HTTP status code: 200 (OK), 201 (Created), 400 (Bad Request), 404 (Not found), etc.
     }                                                                                              */
    public function pmRestRequest($method, $endpoint, $aVars = null, $accessToken = null) {
        $apiServer = "http://192.168.0.43/api/1.0/workflow/"; 
        $endpoint = "cases";
        //$accessToken = json_decode(file_get_contents(ROOT . 'uploads'. DS ."app-data.json"), true);
       global $pmServer;
     
       if (empty($accessToken) and isset($_COOKIE['access_token'])) 
          $accessToken = $_COOKIE['access_token'];
     
       if (empty($accessToken)) { //if the access token has expired
          //To check if the PM login session has expired: !isset($_COOKIE['PHPSESSID'])
          header("Location: /bpm/access/"); //change to match your login method
          die();
       }
     
       //add beginning / to endpoint if it doesn't exist:
       if (!empty($endpoint) and $endpoint[0] != "/")
          $endpoint = "/" . $endpoint; 
     
       $ch = curl_init($pmServer . $endpoint);
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
          header("Location: loginForm.php"); //change to match your login method
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

    protected function createTable($nameTable){
        $create = $this->_db->query("create table MY_PM_{$nameTable} (ID_PM mediumint(8) unsigned default null auto_increment, CLAVE varchar(3) not null, VALOR varchar(250) not null,PRIMARY KEY (ID_PM))");
        return true;
    }
    
}