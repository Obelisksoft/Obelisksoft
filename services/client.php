<?php
ini_set('soap.wsdl_cache_enabled', '0'); // disabling WSDL cache
$client = new SoapClient("http://sgd.obelisksoft.com/services/Obelisk.wsdl");

$params = array(array('num1'=>2, 'num2'=>2));
$result = $client->__soapCall('sumar', $params);

$par = array(array('user'=>'admin','passwd'=>'admin'));
$result2 = $client->__soapCall('login',$par);
print_r($result2);
print_r($result);


 
?>