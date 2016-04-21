<?php

class searchController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        $this->_rol = $this->loadModel('rol');
        $this->_retention = $this->loadModel('retention');
        $this->_valoration = $this->loadModel('valoration');
        $this->_retentiontypdo = $this->loadModel('retentiontypdoc');
        $this->_typeindex = $this->loadModel('retentiontypedocindex');
        $this->_valorationtypedoc = $this->loadModel('valorationtypedoc');
        $this->_typeindextvd = $this->loadModel('valorationtypedocindex');
        $this->_index = $this->loadModel('index');
        $this->_cacheView = $this->loadModel('cacheView');

    }

    public function index(){

    }

    public function search(){
    	$this->_view->setJs(array('tabslideout'));
           
        $this->_view->renderizar('search', 'search');
    }

     public function tableretention(){
         $this->_view->setJs(array('retention'));
         //loading series
         $serie=$this->_retention->getParent();
        foreach ($serie as $series) {
            $treeSub="";
            $tree.="<li><span class='folder' id='serie".$series['id_retention']."' att='".$series['id_retention']."'>".$series['retention']."</span>";
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
        $this->_view->render('tableretention', 'search');
    }

    public function getserie(){
        $id_serie=$_GET['id_serie'];
        if($_GET){
            echo "ok";
        }
    }

    public function loadsearch(){
        $this->__('');
        $urlp=$_SERVER['REQUEST_URI'];
        echo $urlp;
        $urlp=explode("?",$urlp);
        $urlp=$urlp[1];
        $urlp=rtrim($urlp,"&");
        $urlp=parse_str($urlp,$urlp2);
        $offset=0;
        foreach ($urlp2 as $tit => $valt){
            switch ($tit){
                case "serie":
                    $where.=" and serie=$valt ";
                    break;
                case "ss":
                    $where.=" and subserie=$valt";
                    break;
                case "td":
                    $where.=" and  tipo=$valt";
                    break;
                case "pag":
                    $offset=$valt*10;
                    if ($offset=="")
                    $offset=0;
                    break;
                case "nvo":
                    if ($valt==0){
                        //Nueva consulta, guarda el contador
                        $nvo=0;
                    }else
                    $nvo="";

                    break;
                case "tabla":
                    if ($valt=="tvd")
                    $where.=" and trdtvd=2";
                    else
                    $where.=" and trdtvd=1";
                    break;
                default:
                    if (strrpos($valt,"*")===false){
                        $where.=" and  LOWER(".$tit.")='".strtolower($valt)."'";
                    }else{
                        $where.=" and  LOWER(".$tit.") like '".str_replace("*","%",strtolower($valt))."'";
                    }
                    break;
            }
        }
    }

    public function searchTrd(){
        $this->__('');
        $this->_view->assign('titulo', $this->__('Search Advanced'));
        $this->_view->setJs(array('loadajax'));
        $this->_view->setJs(array('search'));
        $this->_view->assign('serie', $this->_retention->getParent()); 
        $this->_view->renderizar('searchTrd', 'search');
    }

    public function searchTvd(){
        $this->__('');
        $this->_view->assign('titulo', $this->__('Search Advanced'));
        $this->_view->setJs(array('loadajax'));
        $this->_view->setJs(array('search'));
        $this->_view->assign('serie', $this->_valoration->getParent()); 
        $this->_view->renderizar('searchTvd', 'search');
    }

    public function advanced(){
        $this->__('');
        $this->_view->assign('titulo', $this->__('Search Advanced'));
        $this->_view->setJs(array('loadajax'));
        $this->_view->assign('serie', $this->_retention->getParent()); 


        $this->_view->renderizar('advanced', 'search');

    }

    public function getSubserie(){
        if($this->getInt('serie'))
        echo json_encode($this->_retention->getParentSub($this->getInt('serie')));
    }
    
   

    public function getTypeDoc(){
        if($this->getInt('subserie'))
        echo json_encode($this->_retentiontypdo->getSubTypeDoc($this->getInt('subserie')));
    }

    public function getfields(){
         if($this->getInt('typedocment'))
        echo json_encode($this->_typeindex->getSubTypeDocindex($this->getInt('typedocment')));
    }

    //valoration
    public function getSubserietvd(){
        if($this->getInt('serietvd'))
        echo json_encode($this->_valoration->getParentSub($this->getInt('serietvd')));
    }

    public function getTypeDoctvd(){
        if($this->getInt('subserietvd'))
        echo json_encode($this->_valorationtypedoc->getSubTypeDoc($this->getInt('subserietvd')));
    }

    public function getfieldstvd(){
         if($this->getInt('typedocmenttvd'))
        echo json_encode($this->_typeindextvd->getSubTypeDocindex($this->getInt('typedocmenttvd')));
    }

    public function getsearchtrd(){
        if(isset($_GET["searchtrd"]))
        {
            $serie=$_POST['serie'];
            $subSerie=$_POST['subserie'];
            $tipoDoc=$_POST['tipodoc'];

            foreach ($_GET as $key => $value) {
                 if (($key!='folder')&&($key!='searchtrd')&&($key!='serie')&&($key!='serie')&&($key!='subserie')&&($key!='tipodoc')&&($key!='trd')&&($key!='url')){
                    if($value!=null){
                        
                        $query.=$key." LIKE '%".$value."%' AND ";
                    }else{
                        $query.= "";
                    }
                    
                }
                
            }
            $query1=rtrim ($query,' AND');

            //$respuesta="paso el formulario";
            echo json_encode($this->_cacheView->getData($query1));

        }
    }

    /*public function getSerie(){
        if(isset($_POST["table"]))
        {
            if($_POST["table"]=1){
                echo json_encode($this->_retention->getParent());
            }else{
                echo json_encode($this->_valoration->getParent());
            }
        }
    }*/

    public function getTable(){
        if(isset($_POST["table"]))
        {
            if($_POST["table"]==1){
                echo json_encode($this->_retention->getParent());
            }else{
                echo json_encode($this->_valoration->getParent());
            }
        }
    }


    public function searchIndex($pagina = false){
        $this->__('');
        $buscar = $_POST['b'];

        if(!$this->filtrarInt($pagina)){
                $pagina = false;
        }
        else{
                $pagina = (int) $pagina;
        }

        $this->getLibrary('paginador');
        $paginador = new Paginador();
       
      if(!empty($buscar)) {
            $autoRR=$paginador->paginar($this->_index->searchIndex($buscar), $pagina);
            $num=0;
            foreach ($autoRR as $key) {
                $score=$key['score'];
                $num++;
            }
            echo '<h1 class="font-md">'.$this->__('Search Results for').' <span class="semi-bold">'.$this->__('Document').'</span><small class="text-danger"> &nbsp;&nbsp;('.$num.' results)</small></h1>
            <div class="search-results clearfix">';
            $autoR=$paginador->paginar($this->_index->searchIndex($buscar), $pagina);
            $score=$autoR[0]['score'];
            
            foreach ($autoR as $autosR) {
                $results = $autosR['SEARCH'];
                $iddocumento=$autosR['ID_HASTDOCUMENT'];
                $result = explode("=", $results);
                echo '<h4><a href="/document/viewdocument/?hastdocument='.$iddocumento.'"><strong>'.$result[0].'</strong></a></h4>
                        <div>
                        <p class="note">
                            <a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>
                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                        </p>
                        <div class="url text-success">
                            '.$autosR['NAME_DOCUMENT'].'<i class="fa fa-caret-down"></i>
                        </div>
                        <p class="description">';
                $resultss = explode(",", $result[1]);
                $can=count($resultss);
                $i=0;
                $res='';
                while ( $i<= $can) {
                    $res.='<p>'.$resultss[$i].'</p>';
                    $i++;
                }
                $tal=$res.'</p></div><hr>';
                echo $tal;
            }            
      }

      //$this->_view->render('searchIndex', 'search');
    }

    public function getSearchSerie(){
        $idserie = $_POST['serie'];
        //$result1=$this->_cacheView->getSearchSerie($idserie);
        echo json_encode($this->_cacheView->getSearchSerie($idserie));

    }

    public function getSearchSub(){
        $idserie = $_POST['serie'];
        $idsubserie = $_POST['subserie'];
        //$result1=$this->_cacheView->getSearchSerie($idserie);
        echo json_encode($this->_cacheView->getSearchSub($idserie,$idsubserie));
    }

    public function getSearchType(){
        $idserie = $_POST['serie'];
        $idsubserie = $_POST['subserie'];
        $idtype = $_POST['type'];
        //$result1=$this->_cacheView->getSearchSerie($idserie);
        echo json_encode($this->_cacheView->getSearchType($idserie,$idsubserie,$idtype));
    }
}