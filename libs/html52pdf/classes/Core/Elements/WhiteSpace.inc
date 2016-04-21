<?php

/**
 * Whitespace
 *
 * @copyright  Copyright(c)2014 No-nonsense Labs (http://www.nononsenselabs.com)
 * @license    http://www.html52pdf.com/licenses
 * @link       http://www.html52pdf.com
 * @version    1.0
 * @since      1.0
 */

namespace Html52pdf\Core\Elements;

use Html52pdf\Commons as commons;

/**
 * Creates additional whitespace
 *
 * @package    Html52pdf
 * @subpackage Core
 */

class WhiteSpace extends ODFElement
{
    /**
     * allowed parent nodes
     * 
     * @var array
     * @access public
     * @static
     */
    public static $parentNodes = array(
        'text:a' => true, 
        'text:h' => true, 
        'text:meta' => true, 
        'text:meta-field' => true, 
        'text:p' => true, 
        'text:ruby-base' => true,
        'text:span' => true,
        //also include the custom office:fragment tag
        'office:fragment' => true,
    );
       
    /**
     * Construct
     *
     * @param ODFElement $odfNode
     * @param string $text
     * @param int $number
     * @access public
     */
    public function __construct($odfNode, $number = 1)
    {
        $node = $odfNode->getNode();
        $styleId = $odfNode->getStyleId();
        $target = $odfNode->getTarget();
        parent::__construct($node, $odfNode, $target);
        if (isset(self::$parentNodes[$node->nodeName])) {
            $ws = $node->ownerDocument->createElement('text:s');
            $ws->setAttribute('text:c', $number);
            //check if there is a cursor within the node
            $cursors = $node->getElementsByTagName('customCursor');
            if ($cursors->length > 0) {
                $cursor = $cursors->item(0);
                $cursor->parentNode->insertBefore($ws, $cursor);
            } else {
                $node->appendChild($ws);
            }
        } else {
            $message = 'You can not add whitespace to the parent element.';
            commons\HTML52PDFLogger::logger($message, 'fatal');
        }
    }
   
}