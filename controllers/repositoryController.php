<?php

class repositoryController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_repository = $this->loadModel('repository');
        $this->_acl->acceso('admin_access');
        
    }

    public function index($pagina = false){
        
    	$this->_acl->acceso('view_repository');
    	$this->_view->assign('titulo', $this->__('Repository'));
        $this->_view->assign('miga', $this->__('Repository').' /');
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }
        $this->_view->setJs(array('validation'));
        $this->getLibrary('paginador');
        $paginador = new Paginador();

        $id_search=$_GET['search'];
        $repository=$_GET['repository'];

        if (isset($_GET['search'])){
            $this->_view->assign('repository', $paginador->paginar($this->_repository->getRepositorySearch($repository, $pagina)));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'repository/index'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->assign('titulo', $this->__('Repository'));
            $this->_view->renderizar('index', 'repository');
        }else{
            $this->_view->assign('repository', $paginador->paginar($this->_repository->getRepositories(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'repository/index'));
            $this->_view->assign('titulo', $this->__('Repository'));
            //$this->_view->assign('style', 'display: none;');
            $this->_view->renderizar('index', 'Repository');
        }              
    }

    public function createRepository(){
        $this->__('');
        $this->_acl->acceso('new_repository');
        $this->_view->assign('titulo', $this->__('New Repository'));
        $this->_view->assign('miga', $this->__('Repository').' / '.$this->__('Create Repository'));
        $this->_view->setJs(array('tabledatabase'));
        if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

            if(!$this->getAlphaNum('namerepository')){
                $this->_view->assign('_error', $this->__('Enter the Name Repository'));
                $this->_view->renderizar('createRepository', 'repository');
                exit;
            }

             if(!$this->getTexto('pathrepository')){
                $this->_view->assign('_error', $this->__('Enter the Path Repository'));
                $this->_view->renderizar('createRepository', 'repository');
                exit;
            }

            if($this->_repository->verifyRepository($this->getAlphaNum('namerepository'))){
                $this->_view->assign('_error', 'The Name Repository ' . $this->getAlphaNum('namerepository') . '  already exists');
                $this->_view->renderizar('createRepository', 'repository');
                exit;
            }
            
            if(!$this->getAlphaNum('userrepository')){
                $this->_view->assign('_error', $this->__('Enter the User Repository'));
                $this->_view->renderizar('createRepository', 'repository');
                exit;
            }

            if(!$this->getAlphaNum('passrepository')){
                $this->_view->assign('_error', $this->__('Enter the Password Repository'));
                $this->_view->renderizar('createRepository', 'repository');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createRepository', 'Repository');
                exit;
            }

            $max=$this->_repository->maxOrder();
            $maxx=$max['orde'];

            $this->_repository->insertRepository(
                $this->getAlphaNum('namerepository'),
                $this->getTexto('pathrepository'),
                $this->getAlphaNum('userrepository'),
                $this->getAlphaNum('passrepository'),
                $this->getTexto('description'),
                $this->filtrarInt($maxx+1)
            );          

            $this->redireccionar('repository');
        }

        $this->_view->renderizar('createRepository', 'repository');
    }

    public function editRepository($id_repository){
        $this->_acl->acceso('edit_repository');

        if(!$this->filtrarInt($id_repository)){
            $this->redireccionar('repository');
        }
        
        if(!$this->_repository->getRepository($this->filtrarInt($id_repository))){
            $this->redireccionar('repository');
        }
        
        $this->_view->assign('titulo', $this->__('Edit Repository'));
        $this->_view->assign('miga', $this->__('Repository').' / '.$this->__('Edit Repository'));
        $this->_view->setJs(array('tabledatabases'));
        
        
        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getAlphaNum('namerepository')){
                $this->_view->assign('_error', $this->__('Enter the Name Repository'));
                $this->_view->renderizar('editRepository', 'repository');
                exit;
            }

             if(!$this->getTexto('pathrepository')){
                $this->_view->assign('_error', $this->__('Enter the Path Repository'));
                $this->_view->renderizar('editRepository', 'repository');
                exit;
            }

            if(!$this->getAlphaNum('userrepository')){
                $this->_view->assign('_error', $this->__('Enter the User Repository'));
                $this->_view->renderizar('editRepository', 'repository');
                exit;
            }

            if(!$this->getAlphaNum('passrepository')){
                $this->_view->assign('_error', $this->__('Enter the Password Repository'));
                $this->_view->renderizar('editRepository', 'repository');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('editRepository', 'repository');
                exit;
            }
            
            $this->_repository->editRepository(
                $this->filtrarInt($id_repository),
                $this->getAlphaNum('namerepository'),
                $this->getTexto('pathrepository'),
                $this->getAlphaNum('userrepository'),
                $this->getAlphaNum('passrepository'),
                $this->getTexto('description')
            );    

            $this->redireccionar('repository');
        }
        $this->_view->assign('datee', $this->_repository->getRepository($this->filtrarInt($id_repository)));
        //$this->_view->assign('date', $this->_repository->getRepository($this->filtrarInt($id_repository)));
        $this->_view->renderizar('editRepository', 'repository');
    }

    public function delete(){
        $this->__('');
        if ($_POST){
            $id_repository=$_POST['id_repository'];
                if(!$this->filtrarInt($id_repository)){
                $this->redireccionar('repository');
            }
        
            if(!$this->_repository->getRepository($this->filtrarInt($id_repository))){
                $this->redireccionar('repository');
            }
        
            $this->_repository->deleteRepository($this->filtrarInt($id_repository));
            $this->redireccionar('repository');
        }
     }

     public function readingRepository(){
        $this->_acl->acceso('new_repository');
        $this->_view->assign('titulo', $this->__('New Repository'));
        $this->_view->assign('miga', $this->__('Repository').' / '.$this->__('Reading Repository'));
        $this->_view->setJs(array('drag-and-drop'));
        $this->_view->setJs(array('tabledatabases'));
        //llamar los datos de las bodegas para mostrar
        $repositories=$this->_repository->getRepositories();
        $this->_view->assign('data',$repositories);


        $this->_view->renderizar('readingRepository', 'repository');
     }

     public function Orden(){
        $this->__('');
        $order = substr ($_POST['orden'], 0, -1);
        $_order = explode("|",$order);
        $rta = "";
        for($i=1; $i<=(count($_order)); $i++){
            $almacenar = 0;
            if($i == 1)
            $almacenar = 1;
            //update to table MY_REPOSITORY
            $update=$this->_repository->updateRepository(
                $this->filtrarInt($_order[$i-1]),
                $this->filtrarInt($i)
            );
        }
     }
}