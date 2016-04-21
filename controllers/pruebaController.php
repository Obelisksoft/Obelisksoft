<?php

class pruebaController extends Controller
{
    public function __construct() {
        parent::__construct();
       //$this->_retention = $this->loadModel('retention');
       //$this->_tmp = $this->loadModel('tmp');
    }

    public function index(){
    	$this->_view->assign('titulo', 'Pruebas');
    	$this->_view->setJs(array('pruebita'));
    	$this->_view->renderizar('index', 'preuba');


    }
    
    public function viewdoc(){
    	$this->_view->assign('titulo', 'doc');
    	//$this->_view->setJs(array('pruebita'));
    	$this->_view->renderizar('viewdoc', 'preuba');
    }

    public function htmlpdf(){
        require_once ROOT . 'libs' . DS . 'html52pdf' . DS . 'CreateDocument.inc';

        $doc = new Html52pdf\createDocument();
        $format = '.pdf';//.pdf, .doc, .docx, .odt, .rtf
        //insert a paragraph as HTML
        $doc->html('<p>Hello World!</p>');
        //insert a paragraph with the help of the paragraph method
        $doc->paragraph(array('text' => 'Good Bye World!'));
        $doc->render('hello_world' . $format);   
        $this->_view->renderizar('htmlpdf', 'preuba');
    }

    public function login(){

        if($_POST){
            $data = base64_encode(serialize($_POST));
            //print_r($data);
            echo "<br>";
            print_r($_POST['form']);

             header("Location: http://bpm.obelisksoft.com/sysmigiro/es/neoclassic/login/sysLoginVerify?d=".$data); 
        }

        
        $this->_view->render('login', 'preuba');
    }
}