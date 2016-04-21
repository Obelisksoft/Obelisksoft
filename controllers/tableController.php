<?php

class tableController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_retention = $this->loadModel('retention');
        $this->_valoration = $this->loadModel('valoration');
        $this->_retentiontypdo = $this->loadModel('retentiontypdoc');
        $this->_typeindex = $this->loadModel('retentiontypedocindex');
        $this->_valorationtypedoc = $this->loadModel('valorationtypedoc');
        $this->_typeindexV = $this->loadModel('valorationtypedocindex');
        $this->_status = $this->loadModel('status');
        $this->_type = $this->loadModel('type');
    }

    public function index (){
        //jstree-v.pre1.0
        $this->_view->assign('titulo', 'Table');

        $this->_view->renderizar('index', 'table');
    }

    public function retention(){
        $this->_acl->acceso('view_retention');
        $this->_view->assign('titulo', $this->__('Retention'));
        $this->_view->setJs(array('tree'));
        $this->_view->setJs(array('retention'));
        //load serie
        $serie=$this->_retention->getParent();
        foreach ($serie as $series) {
            $treeSub="";
            $tree.="<li><span class='fa fa-lg fa-folder-open context-menu-one' id='nodo".$series['id_retention']."'>".$series['retention']."</span>
                     <ul>
                      <li style='display:none'><span class=''>SubSerie</span>
                       <ul>";
                        //inicio de la subserie
                            $sub=$this->_retention->getParentSub($series['id_retention']);
                            foreach ($sub as$Sub) {
                                $treeSubtype="";
                                //inicio de la sub serie
                                $treeSub.="<li><span class='fa fa-lg fa-plus-circle context-menu-two' id='nodo".$Sub['id_retention']."'> ".$Sub['retention']."</span>
                                            <ul>
                                                <li><span class=''>Type Document</span>
                                                    <ul>";
                                                //inicio del tipo documental
                                                $type=$this->_retentiontypdo->getSubTypeDoc($Sub['id_retention']);
                                                foreach ($type as $types) {
                                                    $treetypeindex="";                                         
                                                    $treeSubtype.="<li><span class='fa fa-lg fa-file context-menu-thre' id='nodo".$types['id_typedoc']."'> ".$types['documenttype']."</span>
                                                                    <ul>
                                                                      <li><span class=''>Idexes</span>
                                                                        <ul>";
                                                                //inicio del campo indece
                                                                        $typeindex=$this->_typeindex->getSubTypeDocindex($types['id_typedoc']);
                                                                        foreach ($typeindex as $typeindexes) {
                                                                            //indicio del campo indice
                                                                            $treetypeindex.="<li><span class='fa fa-tags' id='nodo".$typeindexes['id_index']."'> ".$typeindexes['indexes']."</span>
                                                                                             <ul>
                                                                                               "; 
                                                                                $treetypeindex.="</ul>
                                                                                        </li>";
                                                                        }
                                                                //fin del campo indice
                                                        $treeSubtype.="$treetypeindex</ul>
                                                                      </li>
                                                                    </ul>
                                                                </li>";
                                                }
                                        $treeSub.="$treeSubtype</ul>
                                                  </li>
                                                 </ul>
                                                </li>";
                            }
                            //fin de la subserie
                        //fin de la subserie
                $tree.="$treeSub</ul>
                      </li>
                     </ul>
                    </li>";


               
        }
            
        $sub=$this->_retention->getParentSub($id_parent);
        $this->_view->assign('data',$tree);

        $this->_view->assign('type', $this->_type->getType());
        $this->_view->assign('status', $this->_status->getStatus());

        $this->_view->renderizar('retention', 'table');
    }

    public function addnodo(){
        $retention=$_POST['nameSerie'];
        if ($retention!=""){
            //insert table my_retention 
             $this->_retention->insertRetention(
                $retention
            );  
            echo "OK";
        }else{
            echo "ERROR";
        }
    }

    public function addnodoSub(){
        $retention=$_GET['retention'];
        $idparent=$_GET['id_parent'];
        if ($retention!=""){
            //insert table my_retention 
             $this->_retention->insertRetentionSub(
                $retention,
                $idparent
            );  
            echo "OK";
        }else{
            echo "ERROR";
        }
    }

    public function getretention(){
         $serie=$this->_retention->getRention($_REQUEST['id_retention']);
            $valor=$serie['retention'];
         
        // $this->_view->assign('serie',$serie);
         echo $valor;

    }

    public function editnodoSeries(){
        if($_REQUEST){
         $this->_retention->editseriesubserie($_REQUEST['id_retention'],$_REQUEST['retention']);
         echo "OK";
        }
         
    }

    public function deleteSerie(){
        if($_POST){
            //revisar si el nodo tienen hijos
            $parent=$this->_retention->chillnodo($_POST['id_serie']);
            foreach ($parent as $value) {
               $idparent=$value['id_retention'];
            }
            if($idparent!=null){
                 echo "ERROR";
            }else{
                //si es diferente de null eliminamos la serie
               $this->_retention->delete($_POST['id_serie']);             
               echo "OK";
            }
        }
        
    }

    public function deleteSerieSub(){
        if($_POST){
            //revisar si el nodo tienen hijos
            $idretention=$this->_retention->chilltypedoc($_POST['id_subserie']);
            foreach ($idretention as $value) {
               $id_typedoc=$value['id_retention'];
            }
            if($id_typedoc!=null){
                 echo "ERROR";
            }else{
                //si es diferente de null eliminamos la serie
               $this->_retention->delete($_POST['id_subserie']);             
               echo "OK";
            }
        }
        
    }

    //=============== Valoration =====================

    public function valoration(){
        $this->__('');
        $this->_acl->acceso('view_valoration');
         $this->_view->assign('titulo', 'Valoration');
        $this->_view->setJs(array('treev'));
        //load serie
        $serie=$this->_valoration->getParent();
        foreach ($serie as $series) {
            $treeSub="";
            $tree.="<li><span class='fa fa-lg fa-folder-open context-menu-one' id='nodo".$series['id_valoration']."'>".$series['valoration']."</span>
                     <ul>
                      <li style='display:none'><span class=''>SubSerie</span>
                       <ul>";
                        //inicio de la subserie
                            $sub=$this->_valoration->getParentSub($series['id_valoration']);
                            foreach ($sub as$Sub) {
                                $treeSubtype="";
                                //inicio de la sub serie
                                $treeSub.="<li><span class='fa fa-lg fa-plus-circle context-menu-two' id='nodo".$Sub['id_valoration']."'> ".$Sub['valoration']."</span>
                                            <ul>
                                                <li><span class=''>Type Document</span>
                                                    <ul>";
                                                //inicio del tipo documental
                                                $type=$this->_valorationtypedoc->getSubTypeDoc($Sub['id_valoration']);
                                                foreach ($type as $types) {
                                                    $treetypeindex="";                                         
                                                    $treeSubtype.="<li><span class='fa fa-lg fa-file context-menu-thre' id='nodo".$types['id_typedoc']."'> ".$types['documenttype']."</span>
                                                                    <ul>
                                                                      <li><span class=''>Idexes</span>
                                                                        <ul>";
                                                                //inicio del campo indece
                                                                        $typeindex=$this->_typeindexV->getSubTypeDocindex($types['id_typedoc']);
                                                                        foreach ($typeindex as $typeindexes) {
                                                                            //indicio del campo indice
                                                                            $treetypeindex.="<li><span class='fa fa-tags' id='nodo".$typeindexes['id_index']."'> ".$typeindexes['indexes']."</span>
                                                                                             <ul>
                                                                                               "; 
                                                                                $treetypeindex.="</ul>
                                                                                        </li>";
                                                                        }
                                                                //fin del campo indice
                                                        $treeSubtype.="$treetypeindex</ul>
                                                                      </li>
                                                                    </ul>
                                                                </li>";
                                                }
                                        $treeSub.="$treeSubtype</ul>
                                                  </li>
                                                 </ul>
                                                </li>";
                            }
                            //fin de la subserie
                        //fin de la subserie
                $tree.="$treeSub</ul>
                      </li>
                     </ul>
                    </li>";


               
        }
            
        $sub=$this->_valoration->getParentSub($id_parent);
        $this->_view->assign('data',$tree);

        $this->_view->renderizar('valoration', 'table');
    }

    public function addnodoV(){
        $valoration=$_GET['valoration'];
        if ($valoration!=""){
            //insert table my_retention 
             $this->_valoration->insertValoration(
                $valoration
            );  
            echo "OK";
        }else{
            echo "ERROR";
        }
    }

    public function addnodoSubV(){
        $valoration=$_GET['valoration'];
        $idparent=$_GET['id_parent'];
        if ($valoration!=""){
            //insert table my_retention 
             $this->_valoration->insertValorationSub(
                $valoration,
                $idparent
            );  
            echo "OK";
        }else{
            echo "ERROR";
        }
    }

    public function getvalorationV(){
         $serie=$this->_valoration->getValoration($_REQUEST['id_valoration']);
            $valor=$serie['valoration'];
         
        // $this->_view->assign('serie',$serie);
         echo $valor;

    }

    public function editnodoSeriesV(){
        if($_REQUEST){
         $this->_valoration->editseriesubserie($_REQUEST['id_valoration'],$_REQUEST['valoration']);
         echo "OK";
        }
         
    }

    public function deleteSerieV(){
        if($_POST){
            //revisar si el nodo tienen hijos
            $parent=$this->_valoration->chillnodo($_POST['id_serie']);
            foreach ($parent as $value) {
               $idparent=$value['id_valoration'];
            }
            if($idparent!=null){
                 echo "ERROR";
            }else{
                //si es diferente de null eliminamos la serie
               $this->_valoration->delete($_POST['id_serie']);             
               echo "OK";
            }
        }
        
    }

    public function deleteSerieSubV(){
        if($_POST){
            //revisar si el nodo tienen hijos
            $idvaloration=$this->_valoration->chilltypedoc($_POST['id_subserie']);
            foreach ($idvaloration as $value) {
               $id_typedoc=$value['id_valoration'];
            }
            if($id_typedoc!=null){
                 echo "ERROR";
            }else{
                //si es diferente de null eliminamos la serie
               $this->_valoration->delete($_POST['id_subserie']);             
               echo "OK";
            }
        }
        
    }

    public function tableretention(){
         $this->_view->setJs(array('retention'));
         //loading series
         $serie=$this->_retention->getParent();
        foreach ($serie as $series) {
            $treeSub="";
            $tree.="<li><span class='folder' id='serie' att='".$series['id_retention']."'>".$series['retention']."</span>";
                    //inicio de la subserie
                            $sub=$this->_retention->getParentSub($series['id_retention']);
                            foreach ($sub as$Sub) {
                                $treeSubtype="";
                                //inicio de la sub serie
                                $treeSub.="<ul>
                                            <li><span class='folder1' id='nodoS".$Sub['id_retention']."' class='subserie'>".$Sub['retention']."</span>
                                                <ul>";
                                               //inicio del tipo documental
                                               $type=$this->_retentiontypdo->getSubTypeDoc($Sub['id_retention']);
                                                foreach ($type as $types) {
                                                    $treetypeindex=""; 
                                                    $treeSubtype.="<li><span class='file' id='nodo".$types['id_typedoc']."'>".$types['documenttype']."</span></li>
                                                        ";
                                                } 
                                            $treeSub.="$treeSubtype</ul></li>
                                        </ul>";
                            }  

             $tree.= "$treeSub</li>";      
        }
       
        $this->_view->assign('data',$tree);
        $this->_view->render('tableretention', 'table');
    }

    public function getserie(){
        $id_serie=$_GET['id_serie'];
        if($_GET){
            
        }
    }
}