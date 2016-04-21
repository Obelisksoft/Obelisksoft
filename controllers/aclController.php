<?php
class aclController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->_aclm = $this->loadModel('acl');
        $this->__('');
    }

    public function index($pagina = false)
    {        
        $this->_acl->acceso('admin_access');
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }
        $this->getLibrary('paginador');
        $paginador = new Paginador();

        $id_search=$_GET['search'];
        $permission=$_GET['permiso'];

        $this->_view->assign('titulo', $this->__('Administracion de permisos'));
        $this->_view->setJs(array('ajaxacl'));

        if (isset($_GET['search'])){
            $this->_view->assign('permisos', $this->_aclm->getPermisosSearch($permission));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'acl/index'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->renderizar('index', 'acl');
        }else{
           $this->_view->assign('permisos', $paginador->paginar($this->_aclm->getPermisosAll(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'acl/index'));
            $this->_view->renderizar('index', 'acl');
        }
    }

    public function permissionsRole($roleID)
    {
        $this->_acl->acceso('edit_permission');
        $id = $this->filtrarInt($roleID);
        
        if(!$id){
            $this->redireccionar('acl/roles');
        }
        
        $row = $this->_aclm->getRole($id);
        
        if(!$row){
            $this->redireccionar('acl/roles');
        }
        
        $this->_view->assign('titulo', $this->__('Admin Permission'));
        
        if($this->getInt('save') == 1){
            $values = array_keys($_POST);
            $replace = array();
            $eliminar = array();
        
            for($i = 0; $i < count($values); $i++){
                if(substr($values[$i],0,5) == 'perm_'){
                    if($_POST[$values[$i]] == 'x'){
                        $per=substr($values[$i], -2);
                        $perm=str_replace("_", "", $per);
                        $eliminar[] = array(
                            'role' => $id,
                            'permiso' => $perm
                        );
                    }
                    else{
                        if($_POST[$values[$i]] == 1){
                            $v = 1;
                        }
                        else{
                            $v = 0;
                        }
                        
                        $per=substr($values[$i], -2);
                        $perm=str_replace("_", "", $per);

                        $replace[] = array(
                            'role' => $id,
                            'permiso' => $perm,
                            'valor' => $v
                        );
                    }
                }
            }
            for($i = 0; $i < count($eliminar); $i++){
                $this->_aclm->eliminarPermisoRole(
                        $eliminar[$i]['role'],
                        $eliminar[$i]['permiso']);
            }
            
            for($i = 0; $i < count($replace); $i++){
                $this->_aclm->editarPermisoRole(
                        $replace[$i]['role'],
                        $replace[$i]['permiso'],
                        $replace[$i]['valor']);
            }
        }
        
        $this->_view->assign('role', $row);
        $this->_view->assign('permisos', $this->_aclm->getPermisosRole($id));
        $this->_view->renderizar('permissionsRole');
    }
    
    public function newRol()
    {
        $this->_view->assign('titulo', 'New Rol');
        $this->_view->setJs(array('ajaxacl'));
        $this->_view->assign('miga', $this->__('Acl').' / '.$this->__('New Role'));
        $this->_view->setJs(array('tabledatabase'));
    	if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

            if(!$this->getAlphaNum('rol')){
                $this->_view->assign('_error', $this->__('Enter the Role'));;
                $this->_view->renderizar('newRol', 'acl');
                exit;
            }

            if($this->_rol->verifyRole($this->getAlphaNum('rol'))){
                $this->_view->assign('_error', 'The Role ' . $this->getAlphaNum('rol') . '  already exists');
                $this->_view->renderizar('newRol', 'acl');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('newRol', 'acl');
                exit;
            }

            $this->_rol->insertRole(
                $this->getAlphaNum('rol'),
                $this->getTexto('description')
            );          

            $this->redireccionar('acl/roles');
        }
        
        $this->_view->renderizar('newRol', 'acl');
    }
    
    public function newPermission()
    {
        $this->_acl->acceso('new_permission');
        $this->_view->assign('titulo', $this->__('New Permissions'));
        $this->_view->setJs(array('ajaxacl'));
        if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getSql('permiso')){
                $this->_view->assign('_error', $this->__('Debe introducir el nombre del permiso'));
                $this->_view->renderizar('newPermission', 'acl');
                exit;
            }
            
            if(!$this->getAlphaNum('key')){
                $this->_view->assign('_error', $this->__('Debe introducir el key del permiso'));
                $this->_view->renderizar('newPermission', 'acl');
                exit;
            }
            
            $this->_aclm->insertarPermiso(
                    $this->getSql('permiso'), 
                    $this->getAlphaNum('key')
                    );
            
            $this->redireccionar('acl/permisos');
        }
        
        $this->_view->renderizar('newPermission', 'acl');
    }

}