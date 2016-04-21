<?php

/**
 * Logger
 *
 * @copyright  Copyright (c) 2014 No-nonsense Labs (http://www.nononsenselabs.com)
 * @license    http://www.html52pdf/licenses
 * @link       http://www.html52pdf.com
 * @version    1.0
 * @since      1.0
 */

namespace Html52pdf\Commons;

/**
 * Logger
 *
 * @package    Html52pdf
 * @subpackage Commons
 */

class HTML52PDFLogger
{
    /**
     * log
     * @access private
     * @static
     * @var string
     */
    private static $_log = NULL;

    /**
     * Singleton, return instance of class
     *
     * @access public
     * @param $message
     * @param $level Values: trace, debug, info, warn, error, fatal
     * @static
     */
    public static function logger($message, $level)
    {
        $levels = array(
            'debug', 
            'info', 
            'notice', 
            'warning', 
            'error', 
            'critical',
        );

        if (!self::$_log) {
            self::$_log = new \Monolog\Logger('html52pdf');
            // file handler
            $destinationLog = dirname(__FILE__) . '/../../log/html52pdf.log';
            self::$_log->pushHandler(
                new \Monolog\Handler\StreamHandler(
                    $destinationLog, 
                    \Monolog\Logger::WARNING
                )
            );
        }

        // only some leves are valids
        if (in_array($level, $levels)) {
            $stringLevel = 'add' . ucfirst($level);
            self::$_log->$stringLevel($message);
        }
    }
}