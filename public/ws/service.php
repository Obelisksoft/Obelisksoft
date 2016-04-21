<?php
ini_set ('soap.wsdl_cache_enabled', '0'); // Deshabilitar caché WSDL
$servidor = new SoapServer ('Obelisk.wsdl');
$servidor-> addFunction ('sumar');
$servidor->handle();

function sumar($a)
{
	$res=$a->num1 + $a->num2;
	return array('resul'=>$res);
}

?>