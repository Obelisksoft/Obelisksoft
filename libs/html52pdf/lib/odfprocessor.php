<?php

/**
 * This script runs the required ODF macros
 *
 * @package    Html52pdf
 * @subpackage Macros
 * @copyright  Copyright (c) 2014 No-nonsense Labs (http://www.nononsenselabs.com)
 * @license    http://www.html52pdf.com/licenses
 * @link       http://www.html52pdf.com
 * @version    1.0
 * @since      1.0
 */

require_once dirname(__FILE__) . '/../classes/Core/Render.inc';

Use Html52pdf\Core as core;

//create an instance of the Render class
$render = new core\Render();
$longArgs = $render->cliArgs();
\array_unshift($longArgs, 'soffice:');
\array_unshift($longArgs, 'os:');

$args = getopt('', $longArgs);
$macroOptions = \str_replace('_nil_', '', $render->options($args));

$path = $args['soffice'];
$pathArray = explode(DIRECTORY_SEPARATOR, $path);
$dirs = count($pathArray);

if(\strpos(\strtolower($path), 'libreoffice') !== false){
    $invisible = ' --invisible';
} else {
    $invisible = ' --headless';
}

if ($args['os'] == "WINDOWS") {
    //let start to build the command
    $cli = 'cd\\ & ';
    for ($j = 1; $j < $dirs - 1; $j++) {
        $cli .= 'cd "' . $pathArray[$j] . '" ';
        $cli .= '& ';
    }
    $cli .= $pathArray[$dirs-1] . $invisible;
    $cli .= ' "macro:///Html52pdf.Html52pdf.Render(' . $macroOptions . ')"';
} else {
    //let start to build the command
    $cli = 'cd ';
    for ($j = 1; $j < $dirs - 1; $j++) {
        $cli .= DIRECTORY_SEPARATOR . $pathArray[$j];
    }
    $cli .= ' && ' . $pathArray[$dirs-1]. $invisible;
    $cli .= ' "macro:///Html52pdf.Html52pdf.Render(' . $macroOptions . ')"';
}
passthru($cli);