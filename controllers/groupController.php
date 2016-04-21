<?php
class groupController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_group = $this->loadModel('group');
        $this->_status = $this->loadModel('status');
        $this->_groupuser = $this->loadModel('groupuser');
         $this->_user = $this->loadModel('user');
         $this->_acl->acceso('admin_access');
    }

    public function index($pagina = false){
        
        $this->_acl->acceso('admin_access');
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
        $group=$_GET['group'];

        if (isset($_GET['search'])){
            $this->_view->assign('group', $paginador->paginar($this->_group->getGroupSearch($group, $pagina)));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'group/index'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->assign('titulo', 'Groups');
            $this->_view->renderizar('index', 'group');
        }else{
            $this->_view->assign('group', $paginador->paginar($this->_group->getGroupss(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'group/index'));
            $this->_view->assign('titulo', $this->__('Group'));
            $this->_view->assign('miga', $this->__('Group').' / ');
            //$this->_view->assign('style', 'display: none;');
            $this->_view->renderizar('index', 'group');
        }              
    }

    public function createGroup(){
        $this->__('');
        $this->_acl->acceso('new_group');
    	$this->_view->assign('titulo', $this->__('New Group'));
        $this->_view->assign('miga', $this->__('Group').' / '.$this->__('New Group'));
    	$this->_view->setJs(array('nuevo'));
        $this->_view->setJs(array('validation'));
    	if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

            if(!$this->getAlphaNum('group')){
                $this->_view->assign('_error', $this->__('Enter the Group'));
                $this->_view->renderizar('createGroup', 'group');
                exit;
            }

            if($this->_group->verifyGroup($this->getAlphaNum('group'))){
                $this->_view->assign('_error', 'The Group ' . $this->getAlphaNum('group') . ' ya existe');
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('createGroup', 'group');
                exit;
            }  

            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('createGroup', 'group');
                exit;
            } 

            $this->_group->insertGroup(
                $this->getAlphaNum('group'),
                $this->getInt('status')
            );          

            $this->redireccionar('group');
        }
        $this->_view->assign('status', $this->_status->getStatus());
    	$this->_view->renderizar('createGroup', 'group');
    }

    public function editGroup($id_group){
        $this->__('');
    	$this->_acl->acceso('edit_group');
    	if(!$this->filtrarInt($id_group)){
            $this->redireccionar('group');
        }
        
        if(!$this->_group->getGroup($this->filtrarInt($id_group))){
            $this->redireccionar('group');
        }
        
        $this->_view->assign('titulo', $this->__('Edit Group'));
        $this->_view->assign('miga', $this->__('Group').' / '.$this->__('Edit Group'));
        $this->_view->setJs(array('validation'));
        
        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getAlphaNum('group')){
                $this->_view->assign('_error', $this->__('Enter the Group'));
                $this->_view->renderizar('editGroup', 'group');
                exit;
            }

            if($this->_group->verifyGroup($this->getAlphaNum('group'))){
                $this->_view->assign('_error', 'The Group ' . $this->getAlphaNum('group') . ' ya existe');
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('editGroup', 'group');
                exit;
            }  

            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->assign('status', $this->_status->getStatus());
                $this->_view->renderizar('editGroup', 'group');
                exit;
            } 
            
            
            $this->_group->editGroup(
             	$this->filtrarInt($id_group),
                 $this->getAlphaNum('group'),
                $this->getInt('status')
            );   

            $this->redireccionar('group');
        }
        $this->_view->assign('stat', $this->_group->getGroupStatus($this->filtrarInt($id_group)));
        $this->_view->assign('dates', $this->_group->getGroup($this->filtrarInt($id_group)));
        $this->_view->assign('status', $this->_status->getStatus());
        $this->_view->renderizar('editGroup', 'group');
    }

    public function delete(){
        $this->__('');
        $this->_acl->acceso('delete_group');
     	if($_POST){
            //revisar si el nodo tienen hijos
           $user=$this->_groupuser->getGroupusers($_POST['id_group']);
            foreach ($user as $value) {
               $iduser=$value['id_user'];
            }
            if($iduser!=null){
                 echo "ERROR";
            }else{
                //$this->_group->deleteGroup($this->filtrarInt($id_group));
                echo "Ok";
            }
        }
     }

     public function addUsers($id_group){
        $this->__('');

        if(!$this->filtrarInt($id_group)){
            $this->redireccionar('group');
        }
        
        if(!$this->_group->getGroup($this->filtrarInt($id_group))){
            $this->redireccionar('group');
        }

        $this->_view->setJs(array('multiselect'));
        $this->_view->assign('titulo', 'Add Users to Group');
        //consultar llamar el nombre del id_group
        $group=$this->_group->getGroup($id_group);
        $this->_view->assign('group', $group['group']);
        //llamar los usuario
        $groups=$this->_groupuser->getGroupuser($id_group);
        $item="";
        foreach ($groups as $value) {
            $sele="";
            $var=$value['id_group'];

            if($var!="")                
            $sele="selected";

            $item.="<option $sele value='".$value['id_user']."'>".$value['firstname'].' '.$value['lastname']."</option>";
        }

         $this->_view->assign('groups',$item);
        
        //delete groupuser
         //delete typeDocumente select
        if($_POST){
            $this->_groupuser->deleteGroupUser($id_group);
        }    

        $this->_view->assign('idgroup',$id_group);
        if($_POST['idgroup']){
            foreach ($_POST['multiple'] as $id_user){
                    $this->_groupuser->insertGroupUser($_POST['idgroup'],$id_user);   
            }
            $this->redireccionar('group');
        }       
        //ponemos en hiden el id_group
        
        //consul user in table 
        $this->_view->renderizar('addUsers', 'group');
        
     }

     public function autocompletGroup(){

        $autoR=$this->_group->autoGroup($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['group'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }
}