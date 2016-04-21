<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->_user = $this->loadModel('user');
        $this->_logo = $this->loadModel('logo');
    }
    
    public function index()
    {
        $this->__('');
    	$this->_acl->acceso('admin_access');
        $this->_view->setJs(array('search'));
        $this->_view->setJs(array('tabledatabase'));
    	//Session::destroy();
    	//Session::acceso('admin');
        //echo "<pre>";print_r($this->_acl->getPermisos());exit;
        $this->_view->assign('titulo', 'Welcome');
        $this->_view->assign('miga', $this->__('Home'));
        $this->_view->renderizar('index', 'inicio');

        //$this->assign('_tales', 'yeison');
    }

    public function login(){

        $this->__('');

    	$this->_view->assign('titulo', 'Login');
       
        $this->_view->assign('logo',$logo=$this->_logo->getLogoA());

        $this->getLibrary('streams');
        $this->getLibrary('gettext');
        $lan=$_POST['language'];

    	if(Session::get('autenticado')){
            //$this->redireccionar();
        }
         $this->_view->setJs(array('validation'));

        
        $this->_view->assign('titulo', 'Iniciar Sesion');
        
        if($this->getInt('enviar') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getSqlMin('user')){
                $this->_view->assign('_error', 'Debe introducir su nombre de usuario');
                $this->_view->render('login','index');
                exit;
            }
            
            if(!$this->getSql('passwd')){
                $this->_view->assign('_error', 'Debe introducir su password');
                $this->_view->render('login','index');
                exit;
            }
            
            $row = $this->_user->getLogin(
                    $this->getSqlMin('user'),
                    $this->getSql('passwd')
                    );
            
            if(!$row){
                $this->_view->assign('_error', 'Usuario y/o password incorrectos');
                $this->_view->render('login','index');
                exit;
            }
            
            if($row['id_status'] != 1){
                $this->_view->assign('_error', 'Este usuario no esta habilitado');
                $this->_view->render('login','index');
                exit;
            }

            if($lan=='en_ES'){
                Session::set('language','es_ES');
            }else{
                Session::set('language','en_EN');
            }
                     
            Session::set('autenticado', true);
            Session::set('last', $row['lastname']);
            Session::set('firs', $row['firstname']);
            Session::set('id_user', $row['id_user']);
            Session::set('level', $row['id_rol']);
            Session::set('tiempo', time());
            
            $this->redireccionar('index/index/');
        }
       
        $this->_view->render('login', 'index');
    }

    public function logout(){
    	Session::destroy();
        $this->redireccionar();
    }

}