<?php

class indexesController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_indexes = $this->loadModel('indexes');
        $this->_status = $this->loadModel('status');
        $this->_type = $this->loadModel('type');
        $this->_typeindex = $this->loadModel('retentiontypedocindex');
        $this->_typeindexV = $this->loadModel('valorationtypedocindex');
        $this->_listindex = $this->loadModel('listindex');
    }
    
    public function index($pagina = false)
    {
        
        $this->_acl->acceso('admin_access');
        $this->_view->assign('titulo', $this->__('Search Indexes'));
        
        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }

        $this->_view->setJs(array('validation'));
        $this->getLibrary('paginador');
        $paginador = new Paginador();

        $index=$_GET['index'];

        if (isset($_GET['search'])){
            $this->_view->assign('indexes', $paginador->paginar($this->_indexes->getIndexesSearch($index), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'indexes/index'));
            $this->_view->assign('date', $_GET);
            $this->_view->assign('style', 'display: hidden;');
            $this->_view->assign('titulo', $this->__('Indexes'));
            $this->_view->assign('miga', $this->__('Indexes').' /');
            $this->_view->renderizar('index', 'indexes');
        }else{
            $this->_view->assign('indexes', $paginador->paginar($this->_indexes->getIndexesss(), $pagina));
            $this->_view->assign('pagination', $paginador->getView('prueba', 'indexes/index'));
            $this->_view->assign('titulo', $this->__('Indexes'));
            //$this->_view->assign('style', 'display: none;');
            $this->_view->assign('miga', $this->__('Indexes').' /');
            $this->_view->renderizar('index', 'indexes');
        }
    }

    public function createIndexes(){
        $this->_acl->acceso('new_index');
         $this->_view->assign('titulo', $this->__('Create Indexes'));
         $this->_view->assign('miga', $this->__('Indexes').' / '.$this->__('Create Indexes'));
          $this->_view->setJs(array('validation'));
          $this->_view->setJs(array('listIndexes'));
         if($this->getInt('save') == 1){
            $this->_view->assign('date', $_POST);

            $id=$_POST['id'];
            $values=$_POST['value'];
            
            if(!$this->getTexto('indexes')){
                $this->_view->assign('_error', $this->__('Enter the Indexes'));
                $this->_view->renderizar('createIndexes', 'indexes');
                exit;
            }

            $this->_view->assign('type', $this->_type->getType());                
                if(!$this->getInt('type')){
                    $this->_view->assign('_error', $this->__('Enter the type'));
                    $this->_view->renderizar('createIndexes', 'indexes');
                    exit;
                } 
            
            
            $this->_view->assign('status', $this->_status->getStatus());
            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->renderizar('createIndexes', 'indexes');
                exit;
            } 

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('createIndexes', 'indexes');
                exit;
            }

            $this->_indexes->insertIndexes(
                $this->getTexto('indexes'),
                $this->getTexto('description'),
                $this->getInt('status'),
                $this->getInt('type')                
            );          

            //traer el maximo valor del index
            if($_POST['type']==5){
                $maxindex=$this->_indexes->maxIndex();
                $val=count($values);
                //insertar datos en ela tabla lista
                for($i=0; $i<$val;$i++){      
                    $idd= $id[$i];
                    $vall= $values[$i];            
                    $this->_listindex->insertIndex($maxindex[0]['maximo'],$idd,$vall
                    );
                }
            }

            $this->redireccionar('indexes');
        }
         $this->_view->assign('type', $this->_type->getType());
         $this->_view->assign('status', $this->_status->getStatus());
         $this->_view->renderizar('createIndexes', 'indexes');      
    }

    public function editIndexes($id_index){
        $this->_acl->acceso('edit_index');
        if(!$this->filtrarInt($id_index)){
            $this->redireccionar('indexes');
        }
        
        if(!$this->_indexes->getIndexes($this->filtrarInt($id_index))){
            $this->redireccionar('indexes');
        }

        $this->_view->assign('titulo', 'Edit Indexes');
        $this->_view->assign('miga', $this->__('Indexes').' / '.$this->__('Edit Indexes'));

        if($this->getInt('edit') == 1){
            $this->_view->assign('date', $_POST);
            
            if(!$this->getTexto('indexes')){
                $this->_view->assign('_error', $this->__('Enter the Indexes'));
                $this->_view->renderizar('editIndexes', 'indexes');
                exit;
            }

            $this->_view->assign('type', $this->_type->getType());                
            if(!$this->getInt('type')){
                $this->_view->assign('_error', $this->__('Enter the type'));
                $this->_view->renderizar('editIndexes', 'indexes');
                exit;
            } 
                $this->_view->assign('status', $this->_status->getStatus());
            if(!$this->getInt('status')){
                $this->_view->assign('_error', $this->__('Enter the Status'));
                $this->_view->renderizar('editIndexes', 'indexes');
                exit;
            } 

            if(!$this->getTexto('description')){
                $this->_view->assign('_error', $this->__('Enter the Description'));
                $this->_view->renderizar('editIndexes', 'indexes');
                exit;
            }
            
           $this->_indexes->editIndexes(
                $this->filtrarInt($id_index),
                $this->getTexto('indexes'),
                $this->getTexto('description'),
                $this->getInt('status'),
                $this->getInt('type')                
            );       

            $this->redireccionar('indexes');
        }

        $this->_view->assign('dates', $this->_indexes->getIndexes($this->filtrarInt($id_index)));
        $this->_view->assign('type', $this->_type->getType());
        $this->_view->assign('status', $this->_status->getStatus());
        $this->_view->assign('types', $this->_indexes->getIndexType($this->filtrarInt($id_index)));
        $this->_view->assign('stat', $this->_indexes->getIndexStatus($this->filtrarInt($id_index)));
        $this->_view->renderizar('editIndexes', 'indexes');
    }

    public function delete(){
        $this->_acl->acceso('delete_index');
        if ($_POST){
            $id_index=$_POST['id_index'];
                if(!$this->filtrarInt($id_index)){
                $this->redireccionar('indexes');
            }
        
            if(!$this->_indexes->getIndexes($this->filtrarInt($id_index))){
                $this->redireccionar('indexes');
            }
        
            $this->_indexes->deleteIndexes($this->filtrarInt($id_index));
            $this->redireccionar('indexes');
        }
     }

      public function autocompletIndex(){

        $autoR=$this->_indexes->autoIndexes($_REQUEST['term']);
        foreach ($autoR as $autosR) {
            $results[] = $autosR['indexes'];
        }
        echo json_encode($results);
         //$this->_view->assign('date',$json);
        //$this->_view->renderizar('autocompletRol', 'rol');
     }

     public function typeindex(){
        //$this->_view->setJs(array('validation'));
        $this->_view->setJs(array('multiselec'));
        $typdocindex=$this->_typeindex->getTypesDocindex($_REQUEST['id_typedoc']);
        $item="";
        foreach ($typdocindex as $value) {
            $sele="";
            $trd=$value['id_typedoc'];

            if($trd!="")                
            $sele="selected";

            $item.="<option $sele value='".$value['id_index']."'>".$value['indexes']."</option>";
        }

        $this->_view->assign('typedocindex',$item);

        if($_POST){
            $this->_typeindex->deleteTypeDocIndex($_REQUEST['id_typedoc']);
        }

        //save field index
        $this->_view->assign('idtypeindex',$_GET['id_typedoc']);

        if($_POST['id_typedoc']){
            foreach ($_POST['type'] as $id_typedocindex){
                if($_POST['id_typedoc']){
                    //$this->_typeindex->insertRetTypDocIndex($_POST['id_typedoc'],$id_typedocindex);
                    $this->_typeindex->insertRetTypDocIndex($_POST['id_typedoc'],$id_typedocindex);   
                }
            }
            $url="/table/retention/";
            echo "<script>parent.location.href='$url';</script>";
        }        
        $this->_view->render('typeindex', 'indexes');
     }

     public function typeindexV(){
        //$this->_view->setJs(array('validation'));
        $this->_view->setJs(array('multiselec'));
        $typdocindex=$this->_typeindexV->getTypesDocindex($_REQUEST['id_typedoc']);
        $item="";
        foreach ($typdocindex as $value) {
            $sele="";
            $trd=$value['id_typedoc'];

            if($trd!="")                
            $sele="selected";

            $item.="<option $sele value='".$value['id_index']."'>".$value['indexes']."</option>";
        }

        $this->_view->assign('typedocindex',$item);

        if($_POST){
            $this->_typeindexV->deleteTypeDocIndex($_REQUEST['id_typedoc']);
        }

        //save field index
        $this->_view->assign('idtypeindex',$_GET['id_typedoc']);

        if($_POST['id_typedoc']){
            foreach ($_POST['type'] as $id_typedocindex){
                if($_POST['id_typedoc']){
                    //$this->_typeindex->insertRetTypDocIndex($_POST['id_typedoc'],$id_typedocindex);
                    $this->_typeindexV->insertRetTypDocIndex($_POST['id_typedoc'],$id_typedocindex);   
                }
            }
            $url="/table/valoration/";
            echo "<script>parent.location.href='$url';</script>";
        }        
        $this->_view->render('typeindex', 'indexes');
     }

     public function createIndexAjax(){
        if($_POST){
            $type=$_POST['type'];
            $status=$_POST['status'];
            $index=$_POST['indexes'];
            $description=$_POST['description'];

            if($this->_indexes->insertIndexes($index,$description,$status,$type)){
                echo "error";
            }else{
                echo "success";
            }   
        }
    }
}