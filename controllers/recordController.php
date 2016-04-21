<?php
class recordController extends Controller
{
    public function __construct() {
        parent::__construct();
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

    }

    public function index(){
      $this->__('');
      $this->_view->assign('titulo', 'Record');        
      $this->_view->renderizar('index', 'record');
    }

    public function createRecord(){
      $this->__('');
      $this->_acl->acceso('admin_access');
      $this->_view->assign('titulo', 'Create Record');
      $this->_view->setJs(array('loadajax'));
        //generar id Expediente
      $length = 30;
      $code = md5(uniqid(rand(), true));
        if ($length != "")
          $hast=substr($code, 0, $length);
        else
          $hast=substr($code);

      $this->_view->assign('idrecord', $hast);
       //cargar serie y subserie
      $this->_view->assign('serie', $this->_retention->getParent());
      $this->_view->renderizar('createRecord', 'record');
    }

    public function newRecord(){
      
    }

    public function newidrecord(){
      $this->__('');
      $length = 30;
      $code = md5(uniqid(rand(), true));
      if ($length != "")
        $hast=substr($code, 0, $length);
      else
        $hast=substr($code);

      echo $hast;
      //$this->_view->render('newidrecord', 'record');
    }
}