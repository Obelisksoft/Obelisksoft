<?php
class tmpController extends Controller
{
    public function __construct() {
        parent::__construct();
        $this->_tmp = $this->loadModel('tmp');
        
    }

    public function index(){

    }
}