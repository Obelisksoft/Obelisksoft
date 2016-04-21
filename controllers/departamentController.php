<?php
class departamentController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_acl->acceso('admin_access');
        $this->_departament = $this->loadModel('departament');
        $this->_retention = $this->loadModel('retention');
        $this->_typeindex = $this->loadModel('retentiontypedocindex');
        $this->_retentiontypdo = $this->loadModel('retentiontypdoc');
        //$this->_deptouser = $this->loadModel('departamentuser');
        
    }
    public function index(){
    	

    	$this->_view->setJs(array('jstree'));

        //$this->_acl->acceso('view_departament');
        $this->_view->assign('miga', $this->__('Departament').' /');
        $this->_view->assign('titulo', $this->__('Departament').' /');
        $this->_view->renderizar('index', 'departament');
    }

    public function departament(){
        //$this->_acl->acceso('view_departament');
        $this->_view->assign('miga', $this->__('Departament').' /');
        $this->_view->assign('titulo', $this->__('Departament').' /');

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
        $departament=$_GET['departament'];

        if (isset($_GET['search'])){
            $this->_view->assign('departament', $paginador->paginar($this->_departament->getDepartamentSearch($departament, $pagina)));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'departament/departament'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->assign('titulo', 'Departament');
            $this->_view->renderizar('departament', 'departament');
        }else{
            $this->_view->assign('departament', $paginador->paginar($this->_departament->getDepartaments(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'departament/departament'));
            $this->_view->assign('titulo', 'Departament');
            //$this->_view->assign('style', 'display: none;');
            $this->_view->renderizar('departament', 'departament');
        }            
    }

    public function createDepartament(){
        //$this->_acl->acceso('view_departament');
        $this->_view->assign('miga', 'Create Departament');
        $this->_view->assign('titulo', 'Create Departament');
        $this->_view->setJs(array('validation'));
        $this->_view->setJs(array('tabledatabase'));

        if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

            if(!$this->getAlphaNum('code')){
                $this->_view->assign('_error', $this->__('Enter the Code'));
                $this->_view->renderizar('createDepartament', 'departament');
                exit;
            }

            if(!$this->getAlphaNum('departament')){
                $this->_view->assign('_error', $this->__('Enter the Departament'));
                $this->_view->renderizar('createDepartament', 'departament');
                exit;
            }

            if($this->_departament->verifyDepartament($this->getAlphaNum('departament'))){
                $this->_view->assign('_error', 'The Departament ' . $this->getAlphaNum('departament') . '  already exists');
                $this->_view->renderizar('createdepartament', 'departament');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createRole', 'rol');
                exit;
            }

            $this->_departament->insertDepartament(
                $this->getAlphaNum('code'),
                $this->getAlphaNum('departament'),
                $this->getTexto('description')
            );          

            $this->redireccionar('departament/departament/');
        }
            $this->_view->renderizar('createDepartament', 'departament');
    }

    public function editDepartament($id_departament){
        $this->__('');
        $this->_acl->acceso('edit_departament');

        if(!$this->filtrarInt($id_departament)){
            $this->redireccionar('departament/departament/');
        }
        
        if(!$this->_departament->getDepartament($this->filtrarInt($id_departament))){
            $this->redireccionar('/departament/departament');
        }
        
        $this->_view->assign('titulo', $this->__('Edit Departament'));
        $this->_view->assign('miga', $this->__('Departament').' / '.$this->__('Edit Departament'));
        $this->_view->setJs(array('tabledatabase'));
        
        
        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);

            if(!$this->getAlphaNum('code')){
                $this->_view->assign('_error', $this->__('Enter the Code'));
                $this->_view->renderizar('editDepartament', 'departament');
                exit;
            }
            
            if(!$this->getAlphaNum('departament')){
                $this->_view->assign('_error', $this->__('Enter the Departament'));
                $this->_view->renderizar('editDepartament', 'departament');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createDepartament', 'departament');
                exit;
            }
            
            $this->_departament->editDepartament(
                $this->filtrarInt($id_departament),
                $this->getAlphaNum('code'),
                $this->getAlphaNum('departament'),
                $this->getTexto('description')
            );   

            $this->redireccionar('departament/departament/');
        }
        
        $this->_view->assign('dates', $this->_departament->getDepartament($this->filtrarInt($id_departament)));
        $this->_view->renderizar('editDepartament', 'departament');
     }

     public function delete(){
        $this->__('');
        $this->_acl->acceso('delete_departament');
        if ($_POST){
            $id_departament=$_POST['id_departament'];
                if(!$this->filtrarInt($id_departament)){
                $this->redireccionar('departament/departament/');
            }
        
            if(!$this->_departament->getDepartament($this->filtrarInt($id_departament))){
                $this->redireccionar('departament/departament/');
            }
        
            $this->_departament->deleteDepartament($this->filtrarInt($id_departament));
            $this->redireccionar('departament/departament/');
        }
     }

     public function autocompletDepartament(){

        $autoR=$this->_departament->autoDepartament($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['departament'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }

     public function userDepartament($id_departament){
        $this->_view->setJs(array('validation'));
        $this->_view->setJs(array('tabledatabase'));
        $this->_view->setJs(array('multiselect'));

        $this->_view->assign('titulo', $this->__('Add User Departament'));
        $this->_view->assign('miga', $this->__('Departament').' / '.$this->__('Add User Departament'));

        $deptoUser=$this->_departament->getDeptUser($id_departament);
        $item="";
        foreach ($deptoUser as $value) {
            $sele="";
            $trd=$value['id_departament'];

            if($trd!="")                
            $sele="selected";

            $item.="<option $sele value='".$value['id_user']."'>".$value['firstname']."</option>";
        }

        $this->_view->assign('deptouser',$item);

        if($_POST){
            $this->_departament->deleteDeptoUser($id_departament);
        }

        //save field index
        $this->_view->assign('iddeparuser',$id_departament);

        if($_POST['id_departament']){
            foreach ($_POST['user'] as $id_depuser){
                if($_POST['id_departament']){
                    //$this->_typeindex->insertRetTypDocIndex($_POST['id_typedoc'],$id_typedocindex);
                    $this->_departament->insertDeptoUser($_POST['id_departament'],$id_depuser);   
                }
            }
            $url="/departament/departament/";
            echo "<script>parent.location.href='$url';</script>";
        }        
        $this->_view->renderizar('userDepartament', 'departament');

     }

     public function permissionDepartament(){

        $this->_view->assign('miga', 'Departament / Permission Departament /');
        $this->_view->setJs(array('tabledatabase'));
        $this->_view->setJs(array('bootree'));

        $depto=$_GET['dept'];
        $depart=$this->_departament->getDepartament($_GET['dept']);
        $this->_view->assign('titulo', $depart['departament']);

        //creamos la estructura para los permisos
        $serie=$this->_retention->getParent();
        foreach ($serie as $key) {
            $treeSub="";
            $tree.="<li><input type='checkbox' name='seriedep[]' id='seriedep' value='".$key['id_retention']."'>
                        <label for='tall' class='custom-unchecked'><h4>".$key['retention']."</h4></label>
                        <ul>";
                        $sub=$this->_retention->getParentSub($key['id_retention']);
                        foreach ($sub as $Sub) {
                            $tipod="";
                            $treeSub.="<li><input type='checkbox' name='subseriedep[]' id='subseriedep' value='".$key['id_retention']."-".$Sub['id_retention']."''>
                                            <label for='tall-1' class='custom-unchecked'><h6>".$Sub['retention']."</h6></label>
                                        <ul>";
                                       $type=$this->_retentiontypdo->getSubTypeDoc($Sub['id_retention']);
                                       foreach ($type as $types) {
                                        $tipod.="<li>
                                                                <input type='checkbox' name='typedocdep[]' id='typedocdep' value='".$Sub['id_retention']."-".$types['id_typedoc']."'>
                                                                <label for='tall-2-1' class='custom-unchecked'>".$types['documenttype']."</label>
                                                     </li>";
                                        }

                                        $treeSub.="$tipod</ul></li>";


                        }

            $tree.="$treeSub</li></ul></li>";
        }

        $this->_view->assign('data',$tree);
        $this->_view->renderizar('permissionDepartament', 'departament');

        if($_POST['addpermission']){
            
            if (isset($_POST['addpermission']) && !empty($_POST['addpermission'])){
                $departamentRe=$this->_departament->getDepartRetention($depto);
                $arrayRe = array();

                if($departamentRe){
                    foreach ($departamentRe as $key=>$value){
                        $id    = $value['id_deptoretention'];
                        $valor = $value['id_retention'];
                        $arrayRe[$id] = $valor;
                    }
                }


            }
        }
    }
}