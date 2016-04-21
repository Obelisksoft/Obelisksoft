<?php

/**
 * Document Fragment
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
 * Creates a document fragment
 *
 * @package    Html52pdf
 * @subpackage Core
 */

class DocumentFragment extends ODFElement
{    
       
    /**
     * Construct
     *
     * @param ODFElement $odfNode
     * @param string $styleId
     * @access public
     */
    public function __construct($odfNode)
    {
        $node = $odfNode->getNode();
        $target = $odfNode->getTarget();
        parent::__construct($node, $odfNode, $target); 
        $fragment = $node->ownerDocument->createElement('office:fragment');
        $this->setNode($fragment);
        $this->setNodeType($fragment->nodeName);
        return $fragment;
    }   
}