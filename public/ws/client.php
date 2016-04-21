<?php
ini_set('soap.wsdl_cache_enabled', '0'); // disabling WSDL cache
$client = new SoapClient("http://sgd.obelisksoft.com/public/ws/Obelisk.wsdl");

$params = array(array('num1'=>1, 'num2'=>10));
$result = $client->__soapCall('sumar', $params);
print_r($result);

 
?>