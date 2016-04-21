<?php

class documentController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
       $this->_tmp = $this->loadModel('tmp');
       $this->_rol = $this->loadModel('rol');
       $this->_retention = $this->loadModel('retention');
       $this->_document = $this->loadModel('document');
       $this->_fileindex = $this->loadModel('fileindex');
       $this->_valoration = $this->loadModel('valoration');
       $this->_retentiontypdo = $this->loadModel('retentiontypdoc');
       $this->_typeindex = $this->loadModel('retentiontypedocindex');
       $this->_valorationtypedoc = $this->loadModel('valorationtypedoc');
       $this->_typeindextvd = $this->loadModel('valorationtypedocindex');
       $this->_documentretention = $this->loadModel('documentretention');
       $this->_repository = $this->loadModel('repository');
       $this->_folder = $this->loadModel('folder');
       $this->_file = $this->loadModel('file');
       $this->_acl->acceso('admin_access');
    }

    public function index(){

    }

    public function newdocumenttrd(){
        $this->_acl->acceso('admin_access');
        $this->_view->assign('titulo', $this->__('New Document').' TRD');
         $this->_view->setJs(array('newdocument'));
         $folder=$_GET['folder'];
         if($folder==""){           
            $length = 8;
            $code = md5(uniqid(rand(), true));
            if ($length != "")
                $this->_view->assign('oculto', substr($code, 0, $length));
            else
                $this->_view->assign('oculto', substr($code));
         }else{
            $this->_view->assign('oculto', $folder);
            
            
         }       

            $this->_view->renderizar('newdocumenttrd', 'document');
        
    }

    public function newdocumenttvd(){
        $this->__('');
        $this->_view->assign('titulo', $this->__('New Document').' TVD');        
        $this->_view->renderizar('newdocumenttvd', 'document');
    }

    public function uploads(){
        $allowed = array('png', 'jpg','jpeg', 'gif','zip','pdf','mp3','tif','mp4');
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"error"}';
                exit;
            }        

            $estructura=ROOT . 'uploads'. DS . $_POST['option'] .DS ;

            $uid_path=$_POST['option'];
            $nametmp=$_FILES['file']['name'];
            $nametmp=str_replace(' ','_',$nametmp);
            $ruta=ROOT . 'uploads'. DS .$_POST['option'] . DS;
            $ext=$extension;

            if (file_exists($estructura)) {
                if(move_uploaded_file($_FILES['file']['tmp_name'],ROOT . 'uploads'. DS .$_POST['option'] . DS .$nametmp)){
                    $this->_tmp->insertTmp($uid_path,$nametmp,$ruta,$ext);
                    echo '{"status":"success"}';                    
                    exit;
                }               

                //guardar archivos en base de datos                

            } else {
                if(!mkdir($estructura, 0777, true)) {
                    die('Fallo al crear las carpetas...');
                }

                    $this->_tmp->insertTmp($uid_path,$nametmp,$ruta,$ext);
                if(move_uploaded_file($_FILES['file']['tmp_name'],ROOT . 'uploads'. DS .$_POST['option'] . DS .$nametmp)){
                    echo '{"status":"success"}';                    
                    exit;
                }                
            }               
        }

        echo '{"status":"error"}';
        exit;
    }

    public function deletetmp(){
        $file=$_POST['id'];
    }

    public function documenttrd(){
        $this->__('');
        $this->_acl->acceso('admin_access');
        $this->_view->assign('titulo', 'New Document TRD');
        $this->_view->setJs(array('loadajax'));
        $this->_view->setJs(array('imagesload'));
        $this->_view->assign('serie', $this->_retention->getParent()); 
        $this->_view->renderizar('documenttrd', 'document');
    }

    public function imagesTemp(){
        $this->__('');
        $folder=$_GET['folder'];
        $this->_view->assign('variable', 'imgaen temporal');
        $this->_view->setJs(array('imgTumbs'));

        //abrir la carpeta contenedora de las imagenes con el id unico 878a13be
        $directorio = opendir(ROOT . 'uploads'. DS . $folder); //ruta actual
        while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
        {
            if( $archivo != "." && $archivo != ".." && $archivo != "Thumbs.db"){
                if (is_dir($archivo))//verificamos si es o no un directorio
                {
                 echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
                }
                else
                {
                  //generar las imagenes Tumbs
                    //echo $archivo . "<br />";
                    $archivoss[] = $archivo; 
                    $imagestmp=asort($archivoss);

                }  
            }            
        }
         //verificamos que extencion es
        $ruta=ROOT . 'uploads'. DS . $folder;
        //ejectuar conver para cambiar la imagen a una tamaño pequeño

        //recorremos el arreglo de imagenes
        $tumbss="";
        //header('Content-type: image/jpeg')
        foreach ($archivoss as $key) {
            $extension = pathinfo($key, PATHINFO_EXTENSION);
            if($extension=="tif"){
                $pathinfo = pathinfo( $ruta.'/'.$key ) ;
                exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $key .' -resize 500x500 '. ROOT . 'uploads'. DS . $folder. DS .$pathinfo['filename'].'.jpg'); 
            }
            else{
                exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $key .' -resize 500x500 '. ROOT . 'uploads'. DS . $folder. DS .$key);
            }
             //exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $key .' -resize 500x500 '. ROOT . 'uploads'. DS . $folder. DS .$key);
        }

        $i=1;
        foreach ($archivoss as $value){
            $extension = pathinfo($key, PATHINFO_EXTENSION);
            if($extension=="tif"){
                $pathinfo = pathinfo( $ruta.'/'.$value ) ;
                exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $value .' -resize 70x100 '. ROOT . 'uploads'. DS . $folder. DS. 'Tumbs_'.$pathinfo['filename'].'.jpg'); 
            }
            else{
                exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $value .' -resize 70x100 '. ROOT . 'uploads'. DS . $folder. DS .'Tumbs_'.$value);
            }
            //exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $value .' -resize 70x100 '. ROOT . 'uploads'. DS . $folder. DS .'Tumbs_'.$value);
            
            $tumbss.='<li>
                            <a class="thumb" name="'.$i.'" href="/uploads/'.$folder. DS .$pathinfo['filename'].'.jpg" title="'.$value.'" >
                                <img src="/uploads/'.$folder.'/Tumbs_'.$pathinfo['filename'].'.jpg" alt="'.$value.'" />
                            </a>
                            <div class="caption">
                                <div class="download">
                                    <a href="/uploads/'.$folder.'/'.$value.'">Download Original</a>
                                </div>
                                <div class="image-title">"'.$i.'"</div>
                                <div class="image-desc">Description</div>
                            </div>
                        </li>';
        $i++;
        
        }

        $this->_view->assign('images', $tumbss);
        //$this->_view->assign('ruta', ROOT . 'uploads'. DS . '878a13be'. $value );
        $this->_view->render('imagesTemp', 'document');
    }
    
    public function captureImage(){
       
        $this->_acl->acceso('admin_access');
        $this->_view->assign('titulo', 'Cature Image');
        $folder=$_GET['folder'];
        $this->_view->setJs(array('zoomImage'));
        $this->_view->setJs(array('loadajax'));
        $this->_view->setJs(array('newdocument'));
        $this->_view->assign('serie', $this->_retention->getParent());
        
        $ruta=ROOT . 'uploads'. DS . $folder;
        //se hace un llamado a la base de datos donde sea igual al folder
            
        $path = $this->_tmp->getfolder($folder);
            
        foreach ($path as $value){
            $namefile[]=$value['nametmp'];
        }
        $cont=count($namefile)-1;
        $extension = pathinfo($namefile[0], PATHINFO_EXTENSION);
        $pathinfo = pathinfo( $ruta.'/'.$namefile[0]) ;
        $this->_view->assign('folder',$folder);
        $this->_view->assign('count',$cont+1);
        $var=$cont+1;
        
        
        if($extension=="tif"){
            exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[0] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
            $file=$folder.'/TEMP_'.$pathinfo['filename'].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' tal='".$folder."'></div>");
        }
            
        if($extension=="jpg"){
            exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[0] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
            $file=$folder.'/TEMP_'.$pathinfo['filename'].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' tal='".$folder."'></div>");
        }

        if($extension=="jpeg"){
            exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[0] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
            $file=$folder.'/TEMP_'.$pathinfo['filename'].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' tal='".$folder."'></div>");
        }
        
        if($extension=="png"){
            exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[0] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
            $file=$folder.'/TEMP_'.$pathinfo['filename'].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' tal='".$folder."'></div>");
        }
        
        if($extension=="pdf"){
            //exec('convert '. ROOT . 'uploads'. DS . $folder . DS . $namefile[0] .' '.ROOT . 'uploads'. DS . $folder. DS .'TEMP_'.$pathinfo['filename'].'.jpg');
            $file='/uploads/'.$folder.'/'.$pathinfo['filename'].'.pdf';
            $this->_view->assign('div', '<embed src="'.$file.'" width="620" height="600">');
            

            //$this->_view->assign('divs', $file);
        }
        
        $this->_view->renderizar('captureImage', 'document');
    }

    public function savedoctrd(){
        $this->__('');
        if($_POST!=""){
            //creamos el documento electronico
            //creamos el hastdocument
            $length = 30;
            $code = md5(uniqid(rand(), true));
            if ($length != "")
                $hast=substr($code, 0, $length);
            else
                $hast=substr($code);

            $namedocument=$_POST['namedocument'];
            $id_typedoc=$_POST['tipodoc'];
            $id_trdtvd=$_POST['trd'];
            $id_user=Session::get('id_user');
            $folder=$_POST['folder'];

            $this->_document->insertDocument(
                $namedocument,
                $hast,
                $id_trdtvd,
                $id_typedoc,
                $id_user
            );

            //insertar en la serie la subserie el tipo documental del documento
            $id_retentionparent=$_POST['serie'];
            $id_retentionchill=$_POST['subserie'];
            $this->_documentretention->insertDocRetention(
                $hast,
                $id_retentionparent,
                $id_retentionchill,
                $id_typedoc
            );

            
            foreach ($_POST as $key => $value) {
                if (($key!='folder')&&($key!='searchtrd')&&($key!='serie')&&($key!='serie')&&($key!='subserie')&&($key!='tipodoc')&&($key!='trd')){
                    $id_index=explode("_",$key);
                    $id_index=$id_index[1];
                    
                    //agregar los campos indices al documento electronico
                    $this->_fileindex->insertFileIndex(
                        $hast,
                        $id_typedoc,
                        $id_index,
                        $id_trdtvd,
                        $value
                    );
                }   
            }
            //llamar la bodega que se encuentra en lectrura
            $id_repositori=$this->_repository->repository();
            $id_repos=$id_repositori[0]['ID_REPOSITORY'];
            $path=$id_repositori[0]['PATH_REPOSITORY'];

            //revisar si el la carpeta se encuentra en el punto de montaje de lo contrario crear
            // si repositori se encuentra agregamaos las imagenes en esta
            // de lo contrario creamos el repositori
            if (file_exists($path.'/'.PREFI_REPOSITORY)) {
                echo "El fichero $nombre_fichero existe";
            } else {
                //crear el repositori
                if(!mkdir($path.'/'.PREFI_REPOSITORY.$id_repos, 0777, true)) {
                    //die('Fallo al crear las carpetas...');
                }
            }

            //revisar los archivos que llegan para guardar
            //de la tabla temp
            $files=$this->_tmp->gettmp($folder);
            $k=1;
            foreach ($files as $value) {
                $file=$value['nametmp'];
                $pathfile=$value['ruta'];
                $ext=$value['ext'];
                $extension = pathinfo($value['nametmp'], PATHINFO_EXTENSION);

            //}


                //validar que hallan folderes esta bacio
                // ver el numero de folder donde se ecuentrala carpeta
                $id_folder=$this->_folder->maxFiles();
                foreach ($id_folder as $key) {
                    $id=$key['ID'];
                }
                

                $no_folder=$this->_folder->getFolderss($id); 
                $no_fil=$no_folder[0]['NO_FILE'];
                $no_fol=$no_folder[0]['NO_FOLDER'];
                //si numero folder es vacio por primer vez
                if($id==0){
                    $can=1;
                    if(!$this->_folder->insertFolder($id_repos,1,1)){
                        //echo "no se inserto";
                    }       
                    
                    //crear el folder
                    if(!mkdir($path.'/'.PREFI_REPOSITORY.$id_repos.'/'.PREFI_FOLDER.$can, 0777, true)) {
                        //die('tales');
                    }

                    //guardar imagen
                    //mover imagen del archivo temporal al repository          
                    
                    // verifico el ultio registro en la bodega
                        $maxf=$this->_folder->maxFile();
                        $nofol = $maxf[0]['ID_FOLDER'];
                        $nofiles = $maxf[0]['NO_FILE'];
                        //mover la imagen al repositorio y guardar el nombre original en la tabla
                        if(!$this->_file->insertFile($nofol,$hast,$nofiles,$k,$extension)){
                            //mover imagen
                        }

                        if (!copy($pathfile.''.$file,$path.'/'.PREFI_REPOSITORY.$id_repos.'/'.PREFI_FOLDER.$fol.'/'.$nofol.'.bin')) {
                            
                        }


                }else{
                    //verificar que la bodega no tenga mas archivos de lo permitido
                    if($no_fil >= NOFOLDER){
                        //echo "si es menor";
                        $can=$no_fol + 1;
                        if(!$this->_folder->insertFolder($id_repos,1,$can)){
                            //echo "no se inserto";
                        }       
                        
                        //crear el folder
                        if(!mkdir($path.'/'.PREFI_REPOSITORY.$id_repos.'/'.PREFI_FOLDER.$can, 0777, true)) {
                            //die('es manor');
                        }

                        //guardar imagen
                        //echo "paso por el segundo else";
                        // verifico el ultio registro en la bodega
                        $maxf=$this->_folder->maxFile();
                        $nofol = $maxf[0]['ID_FOLDER'];
                        $nofiles = $maxf[0]['NO_FILE'];
                        //mover la imagen al repositorio y guardar el nombre original en la tabla
                        if(!$this->_file->insertFile($nofol,$hast,$nofiles,$k,$extension)){
                            //mover imagen
                        }


                        if (!copy($pathfile.''.$file,$path.'/'.PREFI_REPOSITORY.$id_repos.'/'.PREFI_FOLDER.$can.'/'.$nofol.'.bin')) {
                            
                        }

                    }else{
                        //echo "si es mayor";
                        $cann=$no_fil + 1;
                        $fol=$no_fol;
                        if(!$this->_folder->insertFolder($id_repos,$cann,$fol)){
                            //echo "no se inserto";
                        }       
                        
                        //crear el folder
                        if(!mkdir($path.'/'.PREFI_REPOSITORY.$id_repos.'/'.PREFI_FOLDER.$fol, 0777, true)) {
                            //die('si es mayor');
                        }

                        //guardar imagen
                        

                        // verifico el ultio registro en la bodega
                        $maxf=$this->_folder->maxFile();
                        $nofol = $maxf[0]['ID_FOLDER'];
                        $nofiles = $maxf[0]['NO_FILE'];

                        
                        //mover la imagen al repositorio y guardar el nombre original en la tabla
                        if(!$this->_file->insertFile($nofol,$hast,$nofiles,$k,$extension)){
                            //mover imagen
                        }


                        if (!copy($pathfile.''.$file,$path.'/'.PREFI_REPOSITORY.$id_repos.'/'.PREFI_FOLDER.$fol.'/'.$nofol.'.bin')) {
                           
                        }
                    }      
                }
                $k++;
            }
            echo json_encode("success");         
        }else{
            echo json_encode("error");    
        }

    }

    public function viewdocument(){
        $this->__('');
        $this->_acl->acceso('admin_access');
        $this->_view->assign('titulo', 'View Document');
        $hastDocument=$_GET['hastdocument'];
        $this->_view->setJs(array('zoomImages2'));
        $this->_view->setJs(array('loadajax'));
        $this->_view->setJs(array('newdocument'));
        $this->_view->setJs(array('addDocument'));
        $this->_view->assign('serie', $this->_retention->getParent());
        
        //ir a la bodega donde se encuentra la imagen o documento
        //los archivos se encuentra en la tabla file
        $filetmp=$this->_file->getFiles($hastDocument);
        foreach ($filetmp as $key) {
            $idfile[]=$key['id_file'];
            $nofolder[]=$key['no_folder'];
            $nofile[]=$key['no_file'];
            $orden[]=$key['orden'];
            $ext[]=$key['ext'];

        }

        $ruta=ROOT . 'temp'. DS;
        //se hace un llamado a la base de datos donde sea igual al folder
                        
        $cont=count($nofolder)-1;

        $pathinfo = pathinfo( $ruta.'/'.$namefile[0]) ;
        $this->_view->assign('folder',$hastDocument);
        $this->_view->assign('count',$cont+1);
        $var=$cont+1;
        $orden=1;

        //consultar el primer imagen del documento
        $pathrepo=$this->_folder->getFolder($nofolder[0]);
        foreach ($pathrepo as $valor) {
            $idrepository=$valor['ID_REPOSITORY'];
            $idfile=$valor['ID_FOLDER'];
            $nofolde=$valor['NO_FOLDER'];
        }

        //consultar la bodega
        
        
        if($ext[0]=="tif"){
            exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
            $file='/TEMP_'.$nofolder[0].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' doc='".$hastDocument."' ord='".$orden."' ext='".$ext[0]."'></div>");
        }
            
        if($ext[0]=="jpg"){
            exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
            $file='/TEMP_'.$nofolder[0].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' doc='".$hastDocument."' ord='".$orden."' ext='".$ext[0]."'></div>");
        }
        if($ext[0]=="jpeg"){
            exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
            $file='/TEMP_'.$nofolder[0].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' doc='".$hastDocument."' ord='".$orden."' ext='".$ext[0]."'></div>");
        }
        
        if($ext[0]=="png"){
            exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
            $file='/TEMP_'.$nofolder[0].'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$var."' doc='".$hastDocument."' ord='".$orden."' ext='".$ext[0]."'></div>");
        }
        
        if($ext[0]=="pdf"){
            $im = new Imagick();
            $im->pingImage('/obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin');

            //contar las paginas de un pdf
            
            $nump=$im->getNumberImages();
            if($nump!='1')
                $nu='-0';
            else
                $nu='';
            exec('convert /obeliskdata/'.PREFI_REPOSITORY.$idrepository.DS.PREFI_FOLDER.$nofolde.DS.$nofolder[0].'.bin '.ROOT.'temp'.DS.'TEMP_'.$nofolder[0].'.jpg');
             $file='/TEMP_'.$nofolder[0].$nu.'.jpg';
            $this->_view->assign('div', "<div id='viewer' class='viewer' alt='".$file."' scr='".$nump."' doc='".$hastDocument."' ord='".$orden."' ext='".$ext[0]."'></div>");
        }
        
        //obtenemos el id del documento con get
        $id_hastDocumento=$_GET['hastdocument'];
        //obtener el nombre del documento
        $dataName=$this->_documentretention->getNemeDocument($id_hastDocumento);
        //traer la serie
        $dataSerie=$this->_documentretention->getParent($id_hastDocumento);
        //traer la subSerie
        $dataSubSerie=$this->_documentretention->getChill($id_hastDocumento);
        //trae el tipodocumental
        $dataType=$this->_documentretention->getType($id_hastDocumento);

        $this->_view->assign("namedocument",$dataName[0]['namedocument']);
        $this->_view->assign("serie",$dataSerie[0]['retention']);
        $this->_view->assign("SubSerie",$dataSubSerie[0]['retention']);
        $this->_view->assign("typedoc",$dataType[0]['documenttype']);
        $type=$dataType[0]['ID_DOCTYPE'];
        //obtener los campos indices del tipo documental
        $dataIndex=$this->_typeindex->getTypeIndex($id_hastDocumento,$type);

        $this->_view->assign("typeindex",$dataIndex);



        $this->_view->renderizar('viewdocument', 'document');   
    }

    public function uploadTemp(){
        $allowed = array('png', 'jpg','jpeg', 'gif','zip','pdf','mp3','tif','mp4');
        if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){

            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed)){
                echo '{"status":"error"}';
                exit;
            }        

            $estructura=ROOT . 'temp' . DS ;

            //$uid_path=$_POST['option'];
            $nametmp=$_FILES['file']['name'];
            $nametmp=str_replace(' ','_',$nametmp);
            $ruta=ROOT . 'temp'. DS ;
            $ext=$extension;

            if (file_exists($estructura)) {
                if(move_uploaded_file($_FILES['file']['tmp_name'],ROOT . 'temp'. DS .$nametmp)){
                    //$this->_tmp->insertTmp($uid_path,$nametmp,$ruta,$ext);
                    echo '{"status":"success"}';                    
                    exit;
                }               

                //guardar archivos en base de datos                

            } else {
                if(!mkdir($estructura, 0777, true)) {
                    die('Fallo al crear las carpetas...');
                }

                    //$this->_tmp->insertTmp($uid_path,$nametmp,$ruta,$ext);
                if(move_uploaded_file($_FILES['file']['tmp_name'],ROOT . 'temp'. DS .$nametmp)){
                    echo '{"status":"success"}';                    
                    exit;
                }                
            }               
        }

        echo '{"status":"error"}';
        exit;
    }
}
