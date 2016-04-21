<?php

class rolController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->_rol = $this->loadModel('rol');
    }

    public function index($pagina = false){
        $this->__('');
        $this->_acl->acceso('admin_access');
        $this->_view->assign('miga', 'Rol /');
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }
        
        $this->_view->setJs(array('validation'));
        $this->_view->setJs(array('tabledatabase'));
        
        $this->getLibrary('paginador');
        $paginador = new Paginador();

        $id_search=$_GET['search'];
        $role=$_GET['rol'];

        if (isset($_GET['search'])){
            $this->_view->assign('role', $paginador->paginar($this->_rol->getRoleSearch($role, $pagina)));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'rol/index'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->assign('titulo', 'Roles');
            $this->_view->renderizar('index', 'rol');
        }else{
            $this->_view->assign('role', $paginador->paginar($this->_rol->getRoles(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'rol/index'));
            $this->_view->assign('titulo', 'Roles');
            //$this->_view->assign('style', 'display: none;');
            $this->_view->renderizar('index', 'rol');
        }              

    }

    public function createRole(){
        $this->__('');
        $this->_acl->acceso('new_rol');    	
        $this->_view->assign('miga', $this->__('Rol').' / '. $this->__('Create Rol'));
        $this->_view->assign('titulo', $this->__('New Rol'));
        $this->_view->setJs(array('tabledatabase'));
    	if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

            if(!$this->getAlphaNum('rol')){
                $this->_view->assign('_error', $this->__('Enter the Role'));
                $this->_view->renderizar('createRole', 'rol');
                exit;
            }

            if($this->_rol->verifyRole($this->getAlphaNum('rol'))){
                $this->_view->assign('_error', 'The Role ' . $this->getAlphaNum('rol') . '  already exists');
                $this->_view->renderizar('createRole', 'rol');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createRole', 'rol');
                exit;
            }

            $this->_rol->insertRole(
                $this->getAlphaNum('rol'),
                $this->getTexto('description')
            );          

            $this->redireccionar('rol');
        }

    	$this->_view->renderizar('createRole', 'rol');
    }

     public function editRole($id_role){
        $this->__('');
        $this->_acl->acceso('edit_rol');

     	if(!$this->filtrarInt($id_role)){
            $this->redireccionar('rol');
        }
        
        if(!$this->_rol->getRole($this->filtrarInt($id_role))){
            $this->redireccionar('rol');
        }
        
        $this->_view->assign('titulo', $this->__('Edit Role'));
        $this->_view->assign('miga', $this->__('Rol').' / '.$this->__('Edit Rol'));
        $this->_view->setJs(array('tabledatabase'));
        
        
        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getAlphaNum('rol')){
                $this->_view->assign('_error', $this->__('Enter the Role'));
                $this->_view->renderizar('editRole', 'rol');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createRole', 'rol');
                exit;
            }
            
            $this->_rol->editRole(
             	$this->filtrarInt($id_role),
                $this->getAlphaNum('rol'),
                $this->getTexto('description')
            );   

            $this->redireccionar('rol');
        }
        
        $this->_view->assign('dates', $this->_rol->getRole($this->filtrarInt($id_role)));
        $this->_view->renderizar('editRole', 'rol');
     }

     public function delete(){
        $this->__('');
        $this->_acl->acceso('delete_rol');
     	if ($_POST){
     		$id_role=$_POST['id_role'];
	     		if(!$this->filtrarInt($id_role)){
	            $this->redireccionar('rol');
        	}
        
	        if(!$this->_rol->getRole($this->filtrarInt($id_role))){
	            $this->redireccionar('rol');
	        }
        
	        $this->_rol->deleteRole($this->filtrarInt($id_role));
	        $this->redireccionar('rol');
     	}
     }

     public function autocompletRol(){

        $autoR=$this->_rol->autoRol($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['rol'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }
}