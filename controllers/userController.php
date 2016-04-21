<?php

class userController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_user = $this->loadModel('user');
        $this->_rol = $this->loadModel('rol');
        $this->_status = $this->loadModel('status');
        $this->_acl->acceso('admin_access');
        
    }
    
    public function index($pagina = false)
    {
    	$this->__('');
        $this->_acl->acceso('admin_access');
        $this->_view->assign('miga', $this->__('User').' /');
        
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }

        $this->_view->setJs(array('validation'));
        $this->_view->setJs(array('tabledatabase'));
        $this->getLibrary('paginador');
        $this->getLibrarySmart('config');
        $paginador = new Paginador();

        $firstname=$_GET['firstname'];
        $lastname=$_GET['lastname'];
        $email=$_GET['email'];
        $date=$_GET['date'];

        if (isset($_GET['search'])){
            $this->_view->assign('users', $paginador->paginar($this->_user->getUserSearch($firstname,$lastname,$email,$date), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'user/index'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->assign('titulo', 'User');
            $this->_view->renderizar('index', 'user');
        }else{
            $this->_view->assign('users', $paginador->paginar($this->_user->getUsers(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'user/index'));
            $this->_view->assign('titulo', 'User');
            //$this->_view->assign('style', 'display: none;');
            $this->_view->renderizar('index', 'user');
        }  
    }

    public function createUser(){
        $this->__('');
        $this->_acl->acceso('new_user');
        $this->_view->assign('miga',  $this->__('User').' / ' . $this->__('Create User'));
        $this->_view->assign('titulo', $this->__('New User'));
        $this->_view->setJs(array('nuevo'));
        $this->_view->setJs(array('tabledatabase'));

        if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getSql('firstname')){
                $this->_view->assign('_error', $this->__('Enter the First Name'));
                $this->_view->renderizar('createUser', 'user');
                exit;
            }   

            if(!$this->getSql('lastname')){
                $this->_view->assign('_error', $this->__('Enter the Last Name'));
                $this->_view->renderizar('createUser', 'user');
                exit;
            }     

            if(!$this->getSqlMin('login')){
                $this->_view->assign('_error', $this->__('Enter the login'));
                $this->_view->renderizar('createUser', 'user');
                exit;
            }

            if($this->_user->verifyuser($this->getSqlMin('login'))){
                $this->_view->assign('_error', 'El usuario ' . $this->getAlphaNum('login') . ' ya existe');
                $this->_view->renderizar('createUser', 'user');
                exit;
            }            

            if(!$this->getSql('passwd')){
                $this->_view->assign('_error', $this->__('Enter the password'));
                $this->_view->assign('roles', $this->_rol->getRoles());
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('createUser', 'user');
                exit;
            }

            if($this->getPostParam('passwd') != $this->getPostParam('confirmpasswd')){
                $this->_view->assign('_error', $this->__('the password do not match'));
                $this->_view->renderizar('createUser', 'user');
                exit;
            }

            if(!$this->validarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', $this->__('the email address is invalid'));
                $this->_view->assign('roles', $this->_rol->getRoles());
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('createUser', 'user');
                exit;
            }
            
            if($this->_user->verifyEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', $this->__('This email address is already registered'));
                $this->_view->renderizar('createUser', 'user');
                exit;
            }            
                                
            if(!$this->getInt('rol')){
                $this->_view->assign('_error', $this->__('Enter the Rol'));
                $this->_view->assign('roles', $this->_rol->getRoles());
                $this->_view->renderizar('createUser', 'user');
                exit;
            } 
                
            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('createUser', 'user');
                exit;
            } 

            $this->_user->insertUser(
                $this->getSql('firstname'),
                $this->getSql('lastname'),
                $this->getSql('login'),
                $this->getSql('passwd'),
                $this->getPostParam('email'),
                $this->getInt('rol'),
                $this->getInt('status')
            );
                       
            $login = $this->_user->verifyuser($this->getAlphaNum('login'));
            
            if(!$login){
                $this->_view->assign('_error', $this->__('Failed to register the user'));
                $this->_view->renderizar('createUser', 'registro');
                exit;
            }

             $this->redireccionar('user');
            
        }    
        $this->_view->assign('roles', $this->_rol->getRoles());
        $this->_view->assign('status', $this->_status->getStatus());
        $this->_view->renderizar('createUser', 'user');
    }

    public function editUser($id_user){

        $this->__('');
        $this->_acl->acceso('edit_user');
        $this->_view->setJs(array('tabledatabase'));
        
        if(!$this->filtrarInt($id_user)){
            $this->redireccionar('user');
        }
        
        if(!$this->_user->getUser($this->filtrarInt($id_user))){
            $this->redireccionar('user');
        }
        
        $this->_view->assign('titulo', 'Edit User');
         $this->_view->assign('miga', $this->__('User'). ' / '.$this->__('Edit User'));
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getSql('firstname')){
                $this->_view->assign('_error', $this->__('Enter the First Name'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            }   

            if(!$this->getSql('lastname')){
                $this->_view->assign('_error', $this->__('Enter the Last Name'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            }     

            if(!$this->getSqlMin('login')){
                $this->_view->assign('_error', $this->__('Enter the login'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            }            

            if(!$this->getSql('passwd')){
                $this->_view->assign('_error', $this->__('Enter the password'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            }

            if($this->getPostParam('passwd') != $this->getPostParam('confirmpasswd')){
                $this->_view->assign('_error', $this->__('the password do not match'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            }

            if(!$this->validarEmail($this->getPostParam('email'))){
                $this->_view->assign('_error', $this->__('the email address is invalid'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            }          

            $this->_view->assign('roles', $this->_rol->getRoles());
            if(!$this->getInt('rol')){
                $this->_view->assign('_error', $this->__('Enter the Rol'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            } 

            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->renderizar('editUser', 'user');
                exit;
            } 

            $this->_user->editUser(
                $this->filtrarInt($id_user),
                $this->getSql('firstname'),
                $this->getSql('lastname'),
                $this->getSqlMin('login'),
                $this->getSql('passwd'),
                $this->getPostParam('email'),
                $this->getInt('rol'),
                $this->getInt('status')
            );
            
            $this->redireccionar('user');
        }

        $this->_view->assign('dates', $this->_user->getUser($this->filtrarInt($id_user)));
        $this->_view->assign('rol', $this->_user->getUserRol($this->filtrarInt($id_user)));
        $this->_view->assign('stat', $this->_user->getUserStatus($this->filtrarInt($id_user)));
        $this->_view->assign('roles', $this->_rol->getRoles());
        $this->_view->assign('status', $this->_status->getStatus());
        $this->_view->renderizar('editUser', 'user');
    }

    public function delete(){
        $this->__('');
        if ($_POST){
            $id_user=$_POST['id_users'];
                if(!$this->filtrarInt($id_user)){
                $this->redireccionar('user');
            }
        
            if(!$this->_user->getUser($this->filtrarInt($id_user))){
                $this->redireccionar('user');
            }
        
            $this->_user->deleteUser($this->filtrarInt($id_user));
            $this->redireccionar('user');
        }
     }

      public function autocompletUserFirst(){

        $autoR=$this->_user->autoUserFirst($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['firstname'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }

     public function autocompletUserLast(){

        $autoR=$this->_user->autoUserLast($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['lastname'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }

     public function autocompletUserEmail(){

        $autoR=$this->_user->autoUserEmail($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['email'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }
}