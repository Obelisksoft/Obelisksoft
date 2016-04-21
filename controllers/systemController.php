<?php
class systemController extends Controller
{
	public function __construct() {
		parent::__construct();
		$this->__('');
	}

	public function index(){
		$this->_view->assign('phpinfo', 'PhpInfo');
		$this->_view->assign('miga', 'Phpinfo /');
		$this->_view->renderizar('index', 'system');
	}
	
	public function phpinform(){
		$this->_view->assign('phpinfo', 'PhpInfo');
		$this->_view->assign('miga', 'Phpinfo /');
		$this->_view->renderizar('phpinform', 'system');
	}
	
	public function phpinfo(){
		$this->_view->assign('phpinfo', 'PhpInfo');
		$this->_view->assign('out', phpinfo());
		$this->_view->render('phpinfo', 'system');
	}
}