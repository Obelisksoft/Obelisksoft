<?php
class imageController extends Controller
{
	public function __construct() {
		parent::__construct();
		//$this->_retention = $this->loadModel('retention');
		$this->_tmp = $this->loadModel('tmp');
		$this->_repository = $this->loadModel('repository');
       	$this->_folder = $this->loadModel('folder');
       	$this->_file = $this->loadModel('file');
	}

	public function index(){
		$this->__('');
		$this->_view->assign('titulo', 'Image');
		$this->_view->setJs(array('pruebita'));
		$this->_view->renderizar('index', 'preuba');
	}
	
	public function nextImage(){
		$this->__('');
		if($_POST){
			$folder=$_POST['folder'];
			$init=$_POST['inicio'];
			$ruta=ROOT . 'uploads'. DS . $folder;
			//se hace un llamado a la base de datos donde sea igual al folder
			
			$path = $this->_tmp->getfolder($folder);
			
			foreach ($path as $value){
				$namefile[]=$value['nametmp'];
			}
			$extension = pathinfo($namefile[1], PATHINFO_EXTENSION);
			$pathinfo = pathinfo( $ruta.'/'.$namefile[$init]) ;
			
			if($extension=="tif"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
			
			if($extension=="jpg"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}

			if($extension=="jpeg"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}

			if($extension=="png"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
			
			echo 'TEMP_'.$pathinfo['filename'].'.jpg';	
		}
	}
	
	public function previusImage(){
		$this->__('');
		if($_POST){
			$folder=$_POST['folder'];
			$init=$_POST['inicio'];
			$ruta=ROOT . 'uploads'. DS . $folder;
			//se hace un llamado a la base de datos donde sea igual al folder
				
			$path = $this->_tmp->getfolder($folder);
				
			foreach ($path as $value){
				$namefile[]=$value['nametmp'];
			}
			$extension = pathinfo($namefile[1], PATHINFO_EXTENSION);
			$pathinfo = pathinfo( $ruta.'/'.$namefile[$init]) ;
				
			if($extension=="tif"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
				
			if($extension=="jpg"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
			
			if($extension=="png"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
				
			echo 'TEMP_'.$pathinfo['filename'].'.jpg';
		}
	}

	public function nextImage2(){
		$this->__('');
		if($_POST){
			$documento=$_POST['documento'];
			$init=$_POST['inicio'];
			$orden=$_POST['orden'];
			$exten=$_POST['ext'];
			$ruta=ROOT . 'temp';
			//se hace un llamado a la base de datos donde sea igual al folder

			//busqueda al repository
			if($exten=="pdf" || $exten=="PDF")
				$ord=1;
			else
			$ord=$orden;

			$filetmp=$this->_file->getFile($documento,$ord);
	        foreach ($filetmp as $key) {
	            $idfile[]=$key['id_file'];
	            $nofolder[]=$key['no_folder'];
	            $nofile[]=$key['no_file'];
	            //$orden[]=$key['orden'];
	            $ext[]=$key['ext'];

	        }


	        $ruta=ROOT . 'temp'. DS;
	        //se hace un llamado a la base de datos donde sea igual al folder
	                        
	        $cont=count($nofolder)-1;

	        $pathinfo = pathinfo( $ruta.'/'.$namefile[0]) ;
	        $this->_view->assign('folder',$hastDocument);
	        $this->_view->assign('count',$cont+1);
	        $var=$cont+1;
	        $pdf=$orden-1;
	        $orden=1;

	        //consultar el primer imagen del documento
	        $pathrepo=$this->_folder->getFolder($nofolder[0]);
	        foreach ($pathrepo as $valor) {
	            $idrepository=$valor['ID_REPOSITORY'];
	            $idfile=$valor['ID_FOLDER'];
	            $nofolde=$valor['NO_FOLDER'];
	        }
			if($ext[0]=="tif"){
				exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
				echo 'TEMP_'.$nofolder[0].'.jpg';
			}
			
			if($ext[0]=="jpg"){
				exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
				echo 'TEMP_'.$nofolder[0].'.jpg';
			}

			if($ext[0]=="jpeg"){
				exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
				echo 'TEMP_'.$nofolder[0].'.jpg';
			}

			if($ext[0]=="png"){
				exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
				echo 'TEMP_'.$nofolder[0].'.jpg';
			}

			if($ext[0]=="pdf"){
				echo 'TEMP_'.$nofolder[0].'-'.$pdf.'.jpg';
			}
			
				
		}
	}
	
	public function previusImage2(){
		$this->__('');
		if($_POST){
			$documento=$_POST['documento'];
			$init=$_POST['inicio'];
			$orden=$_POST['orden'];
			$ruta=ROOT . 'temp';
			//se hace un llamado a la base de datos donde sea igual al folder

			//busqueda al repository
			$ord=$orden;
			$filetmp=$this->_file->getFile($documento,$ord);
	        foreach ($filetmp as $key) {
	            $idfile[]=$key['id_file'];
	            $nofolder[]=$key['no_folder'];
	            $nofile[]=$key['no_file'];
	            //$orden[]=$key['orden'];
	            $ext[]=$key['ext'];

	        }


	        $ruta=ROOT . 'temp'. DS;
	        //se hace un llamado a la base de datos donde sea igual al folder
	                        
	        $cont=count($nofolder)-1;

	        $pathinfo = pathinfo( $ruta.'/'.$namefile[0]) ;
	        $this->_view->assign('folder',$hastDocument);
	        $this->_view->assign('count',$cont+1);
	        $var=$cont+1;
	        $orden=1;

	        //consultar el primer imagen del documento
	        $pathrepo=$this->_folder->getFolder($nofolder[0]);
	        foreach ($pathrepo as $valor) {
	            $idrepository=$valor['ID_REPOSITORY'];
	            $idfile=$valor['ID_FOLDER'];
	            $nofolde=$valor['NO_FOLDER'];
	        }
				
			if($extension=="tif"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
				
			if($extension=="jpg"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
			
			if($extension=="png"){
				exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[$init] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
			}
				
			echo 'TEMP_'.$pathinfo['filename'].'.jpg';
		}
	}
	
}




