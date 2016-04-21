<?php

class documenttypeController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_typedoc = $this->loadModel('documenttype');
        $this->_status = $this->loadModel('status');
        $this->_retentiontypdo = $this->loadModel('retentiontypdoc');
        $this->_valorationtypedoc = $this->loadModel('valorationtypedoc');
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
        $typedoc=$_GET['typedoc'];

        if (isset($_GET['search'])){
            $this->_view->assign('titulo', $this->__('Document'));
            $this->_view->assign('typedoc', $paginador->paginar($this->_typedoc->getTypesDoc(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'documenttype/index'));
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->renderizar('index', 'documenttype');            
        }else{
             $this->_view->assign('titulo', $this->__('Document'));
            $this->_view->assign('typedoc', $paginador->paginar($this->_typedoc->getTypesDoc(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'documenttype/index'));
            $this->_view->assign('miga', $this->__('Document Type').' / ');
            //$this->_view->assign('style', 'display: none;');
            $this->_view->renderizar('index', 'documenttype');        }      
    }

    public function createTypeDoc(){
        $this->_acl->acceso('new_document');
         $this->_view->assign('titulo', $this->__('Create Document Type'));
         $this->_view->assign('miga', $this->__('Document Type').' / '.$this->__('New Document Type'));
         $this->_view->setJs(array('validation'));
         if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

             if(!$this->getAlphaNum('doctype')){
                $this->_view->assign('_error', $this->__('Enter the Document Type'));
                $this->_view->renderizar('createTypeDoc', 'documenttype');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createTypeDoc', 'documenttype');
                exit;
            }

            $this->_view->assign('status', $this->_status->getStatus());
            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->renderizar('createIndexes', 'indexes');
                exit;
            } 

            $this->_typedoc->insertDocType(
                $this->getAlphaNum('doctype'),
                $this->getTexto('description'),
                $this->getInt('status')              
            );          

            $this->redireccionar('documenttype');
        }
        $this->_view->assign('status', $this->_status->getStatus());
        $this->_view->renderizar('createTypeDoc', 'documenttype');    	
    }

    public function editDocType($id_typedoc){
        $this->_acl->acceso('edit_document');
        if(!$this->filtrarInt($id_typedoc)){
            $this->redireccionar('documenttype');
        }
        
        if(!$this->_typedoc->getTypeDoc($this->filtrarInt($id_typedoc))){
            $this->redireccionar('documenttype');
        }

        $this->_view->assign('titulo', $this->__('Edit Document Type'));
        $this->_view->assign('miga', 'Document Type / Edit Document Type');

        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getAlphaNum('documenttype')){
                $this->_view->assign('_error', $this->__('Enter the Document Type'));
                $this->_view->renderizar('editDocType', 'documenttype');
                exit;
            }

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('editDocType', 'documenttype');
                exit;
            }

            $this->_view->assign('status', $this->_status->getStatus());
            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->renderizar('editDocType', 'documenttype');
                exit;
            }
            
           $this->_typedoc->editDocType(
                $this->filtrarInt($id_typedoc),
                $this->getAlphaNum('documenttype'),
                $this->getTexto('description'),
                $this->getInt('status')               
            );       

            $this->redireccionar('documenttype');
        }

        $this->_view->assign('dates', $this->_typedoc->getTypeDoc($this->filtrarInt($id_typedoc)));
        $this->_view->assign('status', $this->_status->getStatus());
        $this->_view->assign('stat', $this->_typedoc->getDocTypeStatus($this->filtrarInt($id_typedoc)));
        $this->_view->renderizar('editDocType', 'documenttype');
    }

    public function delete(){
        $this->__('');
        $this->_acl->acceso('delete_document');
        if ($_POST){
            $id_typedoc=$_POST['id_typedoc'];
                if(!$this->filtrarInt($id_typedoc)){
                $this->redireccionar('documenttype');
            }
        
            if(!$this->_typedoc->getTypeDoc($this->filtrarInt($id_typedoc))){
                $this->redireccionar('documenttype');
            }
        
            $this->_typedoc->deleteTypeDoc($this->filtrarInt($id_typedoc));
            $this->redireccionar('documenttype');
        }
     }

     public function autocompletTypeDoc(){

        $autoT=$this->_typedoc->autoTypeDoc($_REQUEST['term']);
        foreach ($autoT as $autosT) {
            $results[] = $autosT['documenttype'];
        }
        echo json_encode($results);
     }

     public function typeSubSerie(){
        $this->__('');
        $this->_view->setJs(array('multiselect'));
        //load typedocument

        $typdocument=$this->_retentiontypdo->getTypesDoc($_REQUEST['id_retention']);
        $item="";
        foreach ($typdocument as $value) {
            $sele="";
            $trd=$value['id_retention'];

            if($trd!="")                
            $sele="selected";

            $item.="<option $sele value='".$value['id_typedoc']."'>".$value['documenttype']."</option>";
        }
        $this->_view->assign('typedoc',$item);

        //delete typeDocumente select
        if($_POST){
            $this->_retentiontypdo->deleteRetentionTypeDoc($_REQUEST['id_retention']);
        }


        //$this->_view->assign('typedoc',$this->_typedoc->getTypesDoc());
        $this->_view->assign('idsubserie',$_REQUEST['id_retention']);
        if($_POST['id_retention']){
            foreach ($_POST['type'] as $id_typedoc){
                if($_POST['id_retention']){
                    $this->_retentiontypdo->insertRetTypDoc($_POST['id_retention'],$id_typedoc);   
                }
            }
            $url="/table/retention/";
            echo "<script>parent.location.href='$url';</script>";
        }       
        
        $this->_view->render('typeSubSerie', 'documenttype');
        
     }

     public function typeSubSerieV(){
        $this->__('');
        $this->_acl->acceso('admin_access');
        $this->_view->setJs(array('multiselect'));
        //load typedocument

        $typdocument=$this->_valorationtypedoc->getTypesDoc($_REQUEST['id_valoration']);
        $item="";
        foreach ($typdocument as $value) {
            $sele="";
            $trd=$value['id_valoration'];

            if($trd!="")                
            $sele="selected";

            $item.="<option $sele value='".$value['id_typedoc']."'>".$value['documenttype']."</option>";
        }
        $this->_view->assign('typedoc',$item);

        //delete typeDocumente select
        if($_POST){
            $this->_valorationtypedoc->deleteValorationTypeDoc($_REQUEST['id_valoration']);
        }

        //$this->_view->assign('typedoc',$this->_typedoc->getTypesDoc());
        $this->_view->assign('idsubserie',$_REQUEST['id_valoration']);
        if($_POST['id_valoration']){
            foreach ($_POST['type'] as $id_typedoc){
                if($_POST['id_valoration']){
                    $this->_valorationtypedoc->insertRetTypDoc($_POST['id_valoration'],$id_typedoc);   
                }
            }
            $url="/table/valoration/";
            echo "<script>parent.location.href='$url';</script>";
        }       
        
        $this->_view->render('typeSubSerieV', 'documenttype');
        
     }

     public function createTypeAjax(){
        if($_POST){
            $status=$_POST['status'];
            $typeDoc=$_POST['doctype'];
            $description=$_POST['description'];

            if($this->_typedoc->insertDocType($typeDoc,$description,$status)){
                echo "error";
            }else{
                echo "success";
            }   
        }
     }
}