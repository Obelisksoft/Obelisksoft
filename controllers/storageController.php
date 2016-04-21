<?php

class storageController extends Controller
{
    public function __construct() {
        parent::__construct();
    }

    public function index(){

    }

    public function route(){        
        $this->_view->assign('titulo', 'Storage');
        $this->_view->renderizar('route', 'storage');
    }
}