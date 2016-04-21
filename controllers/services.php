<?php
$wsdl="services.wsdl";
$soap = new SoapServer($wsdl);
$soap->setClass(‘MiClase’);
$soap->handle();

class services {
	
    public function MiClase(){
      //tu código
    }
 
    /**
     *
     * @param string $email
     * @return string
     */
    public function is_email_available($email){
        //tu codigo…
        return "OK";
    }
    /**
    *
    * @param string $phone
    * @param string $email
    * @return string
    */
    public function register_user($phone, $email){
       //tu codigo…
       return "ok";
    }
    /**
    *
    * @param string $phone
    * @return string
    */
    public function downgrade_user($phone){
       //tu codigo…
       return "Ok";
    }
}