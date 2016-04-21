<?php

/**
 * Tabs
 *
 * @copyright  Copyright(c)2014 No-nonsense Labs (http://www.nononsenselabs.com)
 * @license    http://www.html52pdf.com/licenses
 * @link       http://www.html52pdf.com
 * @version    1.0
 * @since      1.0
 */

namespace Html52pdf\Core\Elements;

use Html52pdf as Html52pdf;
use Html52pdf\Commons as commons;

/**
 * Creates a tab element
 *
 * @package    Html52pdf
 * @subpackage Core
 */

class Tab extends ODFElement
{
    /**
     * allowed parent nodes
     * @var array
     * @access public
     * @static
     */
    public static $parentNodes = array(
        //we will allow only text:p and text:h parents
        //to make sure that the tab elements are included in the parent
        //paragraph or heading
        //'text:a' => true, 
        'text:h' => true, 
        //'text:meta' => true, 
        //'text:meta-field' => true, 
        'text:p' => true, 
        //'text:ruby-base' => true,
        //'text:span' => true,
        //also include the custom office:fragment tag
        'office:fragment' => true,
    );
       
    /**
     * Construct
     *
     * @param ODFElement $odfNode
     * @param array $options
     * @access public
     */
    public function __construct($odfNode, $options)
    {
        $node = $odfNode->getNode();
        $styleId = $odfNode->getCurrentStyleId();
        $target = $odfNode->getTarget();
        $options['target'] = $target;
        parent::__construct($node, $odfNode, $target);
        if (isset(self::$parentNodes[$node->nodeName])) {           
            $tabNode = $node->ownerDocument->createElement('text:tab');
            if (!empty($styleId)){
                Html52pdf\CreateDocument::$tabStops[$styleId][] = $options;
            }
            $node->appendChild($tabNode);
        } else {
            $message = 'You can not add a tab to the parent element.';
            commons\HTML52PDFLogger::logger($message, 'fatal');
        }
    }
   
}