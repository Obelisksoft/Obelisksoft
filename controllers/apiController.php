<?php

class apiController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->__('');
        //$this->_acl->acceso('admin_access');
        $this->_user = $this->loadModel('user'); 
    }

    public function index(){

    }

    public function loginuser(){
        //validar datos user y password por metodo Get
    	if(isset($_POST['user']) && isset($_POST['pass'])){
           $usuario=$_POST['user'];
           $passwd=$_POST['pass'];

            $row = $this->_user->getLogin(
                    $usuario,
                    $passwd
            );

            if(!$row){
                echo '{"descripcion":"El usuario o el Password no son validos"}';
                //$this->_view->render('login','index');
                exit;
            }
            
            if($row['id_status'] != 1){
                echo '{"descripcion":"El usuario no esta activo"}';
                exit;
            }

            //$data='{"lastname":"'.$row['lastname'].'","firstname":"'.$row['firstname'].'","id_user":'.$row['id_user'].',"lavel":'.$row['id_rol'].',"login":"'.$row['login'].'"}';
            //echo ($data);

            echo json_encode($row);
    	}else{

            echo '{"descripcion":"Los parametros no son validos"}';
        }
    }

    public function listUser(){
        //optener la lista de usuarios
        $row = $this->_user->getUsers();

        echo json_encode($row);
    }
}