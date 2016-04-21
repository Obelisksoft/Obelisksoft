
<?php

require_once '../application/Config.php';
require_once '../application/Database.php';
require_once '../application/Model.php';
require_once '../application/Hash.php';
require_once '../models/indexModel.php';
require_once '../models/documentModel.php';
require_once '../models/retentionModel.php';
require_once '../models/valorationModel.php';
require_once '../models/documentretentionModel.php';
require_once '../models/fileindexModel.php';


$usuario=DB_USER;
$password=DB_PASS;
$host=DB_HOST;
$dbname=DB_NAME;

try{

    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

    echo "ERROR: " . $e->getMessage();

}

$conn= new Database();
$table=new indexModel();
$doc=new documentModel();
$docret=new documentretentionModel();
$fileindex=new fileindexModel();

	$data=$table->createTable();
	if(!$data){
		echo "se creeo la tabla";
	}else{
		echo "no se creo la tabla";
	}

//seleccionamos los indices

	$indices=$table->indices();
	if(!$indices){
		echo "no hay indices";
	}else{
		echo "hay indices";
		foreach ($indices as $key) {
			$idindex=$key['id_index'];
			$indexes=$key['indexes'];

			$checkindice=$table->checkIndex($idindex);
			if(!$checkindice){
				$addindex=$table->addIndex($idindex);
			}
		}
	}

	//AGREGAR CAMPOS A LAS COLUMNAS

	$datos=$doc->getDocuments();
	foreach ($datos as $value) {
		$namedoc[]=$value['namedocument'];
		$iddocument[]=$value['id_hastdocument'];
		$trdtvd[]=$value['id_trdtvd'];
		$typedoc[]=$value['id_typedoc'];
	}

	//insertar los documentos a la tabla de busqueda

	$con=count($namedoc);
	echo $con;

	for ($i=0; $i < $con ; $i++) { 
		//traer la serie
		$parent=$docret->getDocRetetionParent($iddocument[$i]);
		$idserie=$parent[0]['ID_RETENTIONPARENT'];
		$serie=$parent[0]['retention'];

		$chill=$docret->getDocRetetionChill($iddocument[$i]);
		$idsubserie=$chill[0]['ID_RETENTIONCHILL'];
		$subserie=$chill[0]['retention'];

		$type=$docret->getDocRetetionType($iddocument[$i]);
		$idtype=$type[0]['ID_DOCTYPE'];
		$types=$type[0]['documenttype'];

		$tales=$table->insertIndex(
                $iddocument[$i],
                $namedoc[$i],
                $trdtvd[$i],
                $idserie,
                $serie,
                $idsubserie,
                $subserie,
                $idtype,
                $types
            );

		//actualizamos el documento
		$update=$doc->updateDocument($iddocument[$i]);

	}

	//indexar los indices

	for ($j=0; $j < $con ; $j++) { 
		$indi=$fileindex->getIndexDoc($iddocument[$j]);
		foreach ($indi as $keys) {
			$upda=$table->updateCache($iddocument[$j],$keys['id_index'],$keys['value']);
		}
	}

//print_r($typedoc);

?>