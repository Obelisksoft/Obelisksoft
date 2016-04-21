<?php

/**
 * Autoloader
 *
 * @copyright  Copyright (c) 2014 No-nonsense Labs (http://www.nononsenselabs.com)
 * @license    http://www.html52pdf/licenses
 * @link       http://www.html52pdf.com
 * @version    1.0
 * @since      1.0
 */

namespace Html52pdf;

/**
 * Autoloader
 *
 * @package    Html52pdf
 * @subpackage Core
 */

class AutoLoader
{
    /**
     * generic load
     * 
     * @access public
     * @static
     */
    public static function load()
    {
        spl_autoload_register(__NAMESPACE__ . '\\AutoLoader::load_Html52pdf');
        spl_autoload_register(__NAMESPACE__ . '\\AutoLoader::load_monolog');
    }
    
    /**
     * load monolog
     * 
     * @param string $className
     * @access public
     * @static
     */
    public static function load_monolog($className)
    {
        $className = str_replace('\\', '/', $className);
        if (file_exists(dirname(__FILE__) . '/../lib/vendor/' . $className . '.php')) {
            require_once dirname(__FILE__) . '/../lib/vendor/' . $className . '.php';
        }
    }
    /**
     * load Html52pdf package
     * 
     * @param string $className
     * @access public
     * @static
     */
    public static function load_Html52pdf($className)
    {
        $className = str_replace('\\', '/', $className);
        $className = str_replace('Html52pdf/', '', $className);
        if (file_exists(dirname(__FILE__) . '/' . $className . '.inc')) {
            require_once dirname(__FILE__) . '/' . $className . '.inc';
        }
    }
}
