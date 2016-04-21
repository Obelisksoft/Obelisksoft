<?php
class logoController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_user = $this->loadModel('user');
        $this->_rol = $this->loadModel('rol');
        $this->_status = $this->loadModel('status');
        $this->_acl->acceso('admin_access');
        $this->_logo = $this->loadModel('logo');
        
    }
    
    public function index()
    {
    	$this->_view->assign('titulo', 'Logo');
        $this->_view->setJs(array('tabledatabase'));
        $this->_view->setJs(array('uploadlogo'));
        $this->getLibrary('paginador');
        $paginador = new Paginador();
    	$this->_view->assign('miga', $this->__('Logo').' /');

        //seleccionar los logos
        $this->_view->assign('logos', $paginador->paginar($this->_logo->getLogos(), $pagina));


    	$this->_view->renderizar('index', 'logo');
    }

    public function uploads(){
        $allowed = array('png', 'jpg','jpeg');
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"error"}';
                exit;
            }        

            $estructura=ROOT . 'public/img/logos'. DS ;

            $uid_path=$_POST['option'];
            $nametmp=$_FILES['file']['name'];
            $nametmp=str_replace(' ','_',$nametmp);
            $ruta=ROOT . 'public/img/logos' . DS;
            $ext=$extension;
            $act=0;

            if (file_exists($estructura)) {
                if(move_uploaded_file($_FILES['file']['tmp_name'],ROOT . 'public/img/logos' . DS .$nametmp)){
                    $this->_logo->insertLogo($nametmp,$ruta,$ext,$act);
                    echo '{"status":"success"}';                    
                    exit;
                }               

                //guardar archivos en base de datos                

            } else {
                if(!mkdir($estructura, 0777, true)) {
                    die('Fallo al crear las carpetas...');
                }

                $this->_logo->insertLogo($nametmp,$ruta,$ext,$act);
                if(move_uploaded_file($_FILES['file']['tmp_name'],ROOT . 'public/img/logos'. DS .$nametmp)){
                    echo '{"status":"success"}';                    
                    exit;
                }                
            }               
        }

        echo '{"status":"error"}';
        exit;
    }

    public function changelogo(){
        $idlogo=$_POST['id_logo'];
        if($_POST){
            $this->_logo->update();
            if(!$this->_logo->updateLo($idlogo)){
                echo "OK";
            }else{
                echo "ERROR";
            }
        }
    }

    public function delete(){
        $idlogo=$_POST['id_logo'];
        if($_POST){

            //consultar ruta del logo
            $path=$this->_logo->getPath($idlogo);
            if(!$this->_logo->delete($idlogo)){
                echo "OK";
                unlink($path[0]['RUTA'].$path[0]['NAMELOGO']);
            }else{
                echo "ERROR";
            }

            //echo $path[0]['NAMELOGO'];
        }
    }
}