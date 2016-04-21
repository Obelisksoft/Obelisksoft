<?php
class servicesController 
{
	public function hello(){
		return "Hello";
	}
    
}
//when in non-wsdl mode the uri option must be specified
$options=array('uri'=>'http://myfile/services/');
//create a new SOAP server
$server = new SoapServer(NULL,$options);
//attach the API class to the SOAP Server
$server->setClass('services');
//start the SOAP requests handler
$server->handle();