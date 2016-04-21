<?php

ini_set ('soap.wsdl_cache_enabled', '0'); // Deshabilitar caché WSDL

define( 'WEB_SERVICE_VERSION', '1.0' );

require_once '../application/Config.php';
require_once '../application/Database.php';
require_once '../application/Model.php';
require_once '../application/Hash.php';
require_once '../models/userModel.php';

$type=DB_TYPE;
$usuario=DB_USER;
$password=DB_PASS;
$host=DB_HOST;
$dbname=DB_NAME;


function sumar($a){
		$res = $a->num1 + $a->num2;
		return array('resul'=>$res);
}

function login($param){
	$fecha_grab=date("Y-m-d H:i:s");
	$user=$param->user;
	$pass=$param->passwd;

	$conn= new Database();
	$us=new userModel();
	$data=$us->getLogin($user,$pass);
	
	if(!$data){
		$message="access_denied";
		$status=1;
	}else{
		$message="access_source";
		$status=0;
	}
	
	return array('status'=>$status,'message'=>$message,'timestap'=>$fecha_grab);
}

function userList($param){
		
		return array('resul'=>$res);
}

$servidor = new SoapServer ('Obelisk.wsdl');
$servidor-> addFunction ('sumar');
$servidor-> addFunction ('login');
$servidor-> addFunction ('userList');
$servidor->handle();

?>