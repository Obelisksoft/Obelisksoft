
<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * View.php
 * -------------------------------------
 */

require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';
//require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS .'smarty-gettext'. DS. 'tsmarty2c.php';


class View extends Smarty
{
    private $_controlador;
    private $_js;
    private $_acl;
    private $_db;
    
    public function __construct(Request $peticion, ACL $_acl) {
        parent::__construct();
        $this->_controlador = $peticion->getControlador();
        $this->_js = array();
        $this->_acl = $_acl;
        $this->_db = new Database();
    }
    
    public function renderizar($vista, $item = false)
    {
        $this->template_dir = ROOT . 'views' . DS . 'layout'. DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'template' . DS;

       $logos = $this->_db->query(
                "SELECT * FROM MY_LOGOS WHERE ACTIVE=1"
                );
                
        $logo = $logos->fetchall();
        
        $menu = array(
            array(
                'id' => 'home',
                'titulo' => 'Home',
                'class' => 'fa fa-dashboard',
                'enlace' => BASE_URL . 'index/index/'
                )
        );
        
        $search= array(
        		array(
        				'id' => 'search',
        				'titulo' => 'Advanced search',
        				'class' => 'fa fa-search',
        				'enlace' => BASE_URL . 'search/searchTrd/'
        		)
        );
        
        

        $menuConf = array(
                array(
                    'id' => 'configuration',
                    'titulo' => 'Admin',
                    'class' => 'dropdown-toggle',
                    'event' => 'dropdown' 
                )
        );

        $itemConf = array(
        		array(
                    'id' => 'indexes',
                    'titulo' => 'Indexes',
                    'class' => 'fa fa-edit',
                    'enlace' => BASE_URL . 'indexes'
                ),            
                array(
                    'id' => 'documenttype',
                    'titulo' => 'Documentary',
                    'class' => 'fa fa-edit',
                    'enlace' => BASE_URL . 'documenttype'
                ),
                array(
                    'id' => 'table',
                    'titulo' => 'Retention table',
                    'class' => 'fa fa-edit',
                    'enlace' => BASE_URL . 'table/retention'
                ),

                array(
                    'id' => 'table1',
                    'titulo' => 'Valoration table',
                    'class' => 'fa fa-edit',
                    'enlace' => BASE_URL . 'table/valoration'
                )
            );


                 $menuB = array(
                    array(
                        'id' => 'user',
                        'titulo' => 'User',
                        'class' => 'dropdown-toggle',
                        'event' => 'dropdown'
                    )
                );

                 $itemB = array(
                    array(
                                'id' => 'user',
                                'titulo' => 'User',
                                'class' => 'fa fa-bar-chart-o',
                                'enlace' => BASE_URL . 'user'
                        ),
                    array(
                                'id' => 'role',
                                'titulo' => 'Role',
                                'class' => 'fa fa-edit',
                                'enlace' => BASE_URL . 'rol'
                    ),
                    array(
                        'id' => 'acl',
                        'titulo' => 'Permissions',
                        'class' => 'fa fa-edit',
                        'enlace' => BASE_URL . 'acl'
                     ),
                    array(
                                'id' => 'group',
                                'titulo' => 'Groups',
                                'class' => 'fa fa-edit',
                                'enlace' => BASE_URL . 'group'
                        ),
                    array(
                                'id' => 'departament',
                                'titulo' => 'Departament',
                                'class' => 'fa fa-edit',
                                'enlace' => BASE_URL . 'departament/departament/'
                        )
                    
                );
            
               $menuA = array(
                    array(
                        'id' => 'system',
                        'titulo' => 'System',
                        'class' => 'dropdown-toggle',
                        'event' => 'dropdown'
                    )
                );

                 $itemA = array(
                    array(
                        'id' => 'logo',
                        'titulo' => 'Logo',
                        'class' => 'fa fa-edit',
                        'enlace' => BASE_URL . 'logo'
                    ),     
                    array(
                        'id' => 'repository',
                        'titulo' => 'Repository',
                        'class' => 'fa fa-bar-chart-o',
                        'enlace' => BASE_URL . 'repository'
                    ),
                    array(
                        'id' => 'inform',
                        'titulo' => 'Info',
                        'class' => 'fa fa-edit',
                        'enlace' => BASE_URL . 'system'
                    )
                           
                    
                );

        
    

        $js = array();
        
        if(count($this->_js)){
            $js = $this->_js;
        }

        $login=Session::get('firs').' '.Session::get('last');
        
        $_params = array(
            'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu,
        	'search' => $search,
            'menuConf' => $menuConf,
            'menuB' => $menuB,        
            'itemB' => $itemB,
            'menuA' => $menuA,
            'itemConf' => $itemConf,  
            'item' => $item,      	
        	'itemA' => $itemA,    
            'js' => $js,
            'login' => $login,
            'logo' => $logo,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
        );
        
        $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.tpl';
        
        if(is_readable($rutaView)){
            $this->assign('_contenido', $rutaView);
        } 
        else {
            throw new Exception('Error de vista');
        }
        
        $this->assign('_acl', $this->_acl);
        $this->assign('_layoutParams', $_params);
        $this->display('template.tpl');
    }

    public function render($vista, $item = false)
    {
        $this->template_dir = ROOT . 'views' . DS . 'layout'. DS . DEFAULT_LAYOUT . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . DEFAULT_LAYOUT . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'templeteWhite' . DS;
        
        $js = array();
        
        if(count($this->_js)){
            $js = $this->_js;
        }
        
        $_params = array(
            'ruta_css' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . DEFAULT_LAYOUT . '/js/',
            'itemB' => $itemA,
            'itemA' => $itemA,
            'item' => $item,
            'js' => $js,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
        );
        
        $rutaView = ROOT . 'views' . DS . $this->_controlador . DS . $vista . '.tpl';
        
        if(is_readable($rutaView)){
            $this->assign('_contenido', $rutaView);
        } 
        else {
            throw new Exception('Error de vista');
        }

        $this->assign('_acl', $this->_acl);        
        $this->assign('_layoutParams', $_params);
        $this->display('templeteWhite.tpl');
    }
    
    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.js';
            }
        } else {
            throw new Exception('Error de js');
        }
    }

    public function setJson(array $json)
    {
        if(is_array($json) && count($json)){
            for($i=0; $i < count($json); $i++){
                $this->_js[] = BASE_URL . 'views/' . $this->_controlador . '/js/' . $js[$i] . '.json';
            }
        } else {
            throw new Exception('Error de json');
        }
    }
}