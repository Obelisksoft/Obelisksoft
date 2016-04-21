<?php

/**
 * CSSSelector2XPath
 * 
 * @copyright  Copyright (c) 2014 No-nonsense Labs (http://www.nononsenselabs.com)
 * @license    http://www.html52pdf.com/licenses
 * @link       http://www.html52pdf.com
 * @version    1.0
 * @since      1.0
 */

namespace Html52pdf\Parser;

use Html52pdf\Parser\HTML as html;
use Html52pdf\Parser\CSS as css;

/**
 * This class converts a CSS selector that has been previously tokenize with the
 * help of the SelectorLexer class into a XPath 1.0 query
 *
 * @package    Html52pdf
 * @subpackage Parser
 */
class CSSSelector2XPath
{
    /**
     * instance of a SelectorLexer class
     * @var SelectorLexer
     * @access private
     */
    private $_lexer;
    
    /**
     * Construct
     *
     * @access public
     */
    public function __construct()
    {
        $this->_lexer = new SelectorLexer();   
    }
    
    
    /**
     * Converts a single selector (with no commas) into a valid XPath 1.0 query
     *
     * @param string $selector
     * @return array|NULL a valid XPath 1.0 query  
     * The first array entry includes the full XPath query and the second the
     * specificity of the corresponding selector 
     * It returns NULL if the CSS selector
     * can not be converted into XPath, i.e. selectors that contain 
     * pseudoclasses and/or pseudoelements that have no XPath counterpart like
     * ':active', ':visited', etcetera 
     * 
     * @access public
     */
    public function generateXPathQuery($selector)
    {
        //initialize the specificity of a selector to zero
        $specificity = 0;
        //remove the :link pseudoselector
        $selector = \str_replace(':link', '', $selector);
        //tokenize the selector
        $tokens = $this->_lexer->tokenize($selector, true);        
        //check if the selector contains XPath incompatible features
        if($tokens === NULL){
            return NULL;
        }
        //we first break the selectors in words that are separated by meaningful
        //whitespace
        $words = array();
        $wordCounter = 0;
        $innerCounter = 0;
        foreach ($tokens as $token) {
            if ($token['token'] != 'whitespace') {
                $words[$wordCounter][$innerCounter]['token'] = $token['token'];
                $words[$wordCounter][$innerCounter]['type'] = $token['type'];
                $innerCounter++;
            } else {
                $wordCounter++;
                $innerCounter = 0;
            }
        }
        $wordCount = count($words);
        //compute the XPath subquery and specificity of each word
        for($j = 0; $j < $wordCount; $j++){
            $wordQuery = $this->_singleWordQuery($words[$j]);
            $specificity += $wordQuery[1];
            if ($wordQuery !== NULL) {
                $wordQueries[$j] = $wordQuery[0];
            } else {
                return NULL;
            }
        }
        //build the complete query
        $singleQuery = \implode('', $wordQueries);
        
        return array ($singleQuery, $specificity);
    }
    
    /**
     * Converts a single word selector (with no commas or meaningful whitespace) 
     * into a valid XPath 1.0 query
     *
     * @param string $word
     * @return array|NULL 
     * The first array element is a valid XPath 1.0 query 
     * The second array entry is the specificity of that word
     * It returns NULL if the CSS selector
     * can not be converted into XPath, i.e. selectors that contain 
     * pseudoclasses and/or pseudoelements that have no XPath counterpart like
     * ':active', ':visited', etcetera 
     * 
     * @access private
     */
    private function _singleWordQuery($word)
    {
        //define the variable that will hold de spcificity of a given selector
        //this variable will be incremented following this rule
        //  1. each id will increment its value in 10000
        //  2. each class or pseudoclass will increment the specificity by 100
        //  3. each element or pseudoelement will add 1 to the specificity
        //the universal selector has specificity 0. The not pseudoelement does
        //not add to the specificity
        $specificity = 0;
        //store the query chunks in an array that we will later reorder
        //to build the final query
        $subQuery = array();
        $subQueryType = array();
        $subQuery[0] = '//';
        //the possible subquery types are:
        // 'base'
        // 'tag'
        // 'universal'
        // 'classSelector'
        // 'idSelector'
        // 'child'
        // 'attribute'
        // 'contains'
        // 'pseudoclass'
        // 'pseudoelement'
        $subQueryType[0] = 'base';
        $counter = 1;
        //variable to store the current subexpression
        $current = '';
        //the possible subexpression types are:
        // ''
        // 'classSelector'
        // 'idSelector'
        // 'attribute'
        // 'contains'
        // 'pseudoclass'
        // 'pseudoelement'
        $currentType = '';
        //analize sintactically the word
        //start to run over the word tokens
        $wordCount = count($word);
        for ($j = 0; $j < $wordCount; $j++) {
            if ($word[$j]['type'] == 'tag') {
                $subQuery[$counter] = $word[$j]['token']; 
                $subQueryType[$counter] = 'tag';
                $specificity += 1;
                $counter++;
            } else if ($word[$j]['type'] == 'literal') {
                if($currentType == 'class'){
                    $subQuery[$counter] = '[contains(concat(" ", @class, " ")';
                    $subQuery[$counter] .= ', " ' . $word[$j]['token'] . ' ")]';
                    $subQueryType[$counter] = 'class';
                    $specificity += 100;
                    $counter++;//go to next subquery
                } else if ($currentType == 'id'){
                    $subQuery[$counter] = '[@id="' . $word[$j]['token'] . '"]';
                    $subQueryType[$counter] = 'id';
                    $specificity += 10000;
                    $counter++;//go to next subquery
                } 
                //If the literal is within an attribute selector we need to
                //parse the operand . This is done further below
            } else if ($word[$j]['type'] == 'numeric') {
                //not parsed yet
            }else if ($word[$j]['type'] == 'metachar') {
                if($word[$j]['token'] == '['){
                    //check for conditions on attributes
                    $current .= '[';
                    $currentType = 'attribute';
                } else if ($word[$j]['token'] == ']') {
                    //the attribute condition finish here
                    if ($current = '['){
                        //there was no '=' sign so the condition just contains 
                        //a bare attribute
                        $current .= '@' . $word[$j-1]['token'] .']';
                    } else {
                        $current .= ']';
                    }
                    $subQuery[$counter] = $current; 
                    $subQueryType[$counter] = $currentType;
                    $currentType = '';
                    $current = '';
                    $specificity += 100;
                    $counter++;//go to next subquery
                } else if ($word[$j]['token'] == ':') {
                    //a pseudoclass selector starts here
                    $currentType = 'pseudoclass';
                } else if ($word[$j]['token'] == '.') {
                    //a class selector starts here
                    $currentType = 'class';
                } else if ($word[$j]['token'] == '#') {
                    //an id selector starts here
                    $currentType = 'id';
                } else if ($word[$j]['token'] == '>'){
                    $subQuery[$counter] = '/'; 
                    $subQueryType[$counter] = 'child';
                    $counter++;//go to next subquery
                } else if ($word[$j]['token'] == '#') {
                    //a pseudoclass selector starts here
                    $currentType = 'id';
                } else if ($word[$j]['token'] == '*') {
                    if ($currentType == 'attribute'){ 
                        $current .= $this->_xpathAttribute('*', $j, $word);
                    } else {
                        $subQuery[$counter] = '*'; 
                        $subQueryType[$counter] = 'universal';
                        $counter++;//go to next subquery
                    }
                } else if ($word[$j]['token'] == '^') {
                    if ($currentType == 'attribute'){ 
                        $current .= $this->_xpathAttribute('^', $j, $word);
                    }
                } else if ($word[$j]['token'] == '$') {
                    if ($currentType == 'attribute'){ 
                        $current .= $this->_xpathAttribute('$', $j, $word);
                    }
                } else if ($word[$j]['token'] == '|') {
                    if ($currentType == 'attribute'){ 
                        $current .= $this->_xpathAttribute('|', $j, $word);
                    }
                } else if ($word[$j]['token'] == '!') {
                    if ($currentType == 'attribute'){ 
                        $current .= $this->_xpathAttribute('!', $j, $word);
                    }
                } else if ($word[$j]['token'] == '=') {
                    if ($currentType == 'attribute'){ 
                        if (isset($word[$j-1]['token'])
                            && (  $word[$j-1]['token'] != '^'
                               || $word[$j-1]['token'] != '$'
                               || $word[$j-1]['token'] != '|'
                               || $word[$j-1]['token'] != '!'
                               || $word[$j-1]['token'] != '~'
                               || $word[$j-1]['token'] != '*'
                                    ) ) {
                            $current .= $this->_xpathAttribute('=', $j, $word);
                        }
                    }
                } else if ($word[$j]['token'] == '~'){
                    if ($currentType == 'attribute'){ 
                        $current .= $this->_xpathAttribute('~', $j, $word);
                    } else {
                        $subQuery[$counter] = '/following-sibling::'; 
                        $subQueryType[$counter] = 'lookAhead';
                        $counter++;//go to next subquery
                    }
                } else if ($word[$j]['token'] == '+'){
                    $subQuery[$counter] = '/following-sibling::*[1]/self::'; 
                    $subQueryType[$counter] = 'lookAhead';
                    $counter++;//go to next subquery
                } else if ($word[$j]['token'] == '('
                           || $word[$j]['token'] == ')'
                           || $word[$j]['token'] == '=') {
                    //do nothing
                }
                
            }else if ($word[$j]['type'] == 'pseudoclass') {
                if($word[$j]['token'] == 'first-child'){
                    $subQuery[$counter] = '*[1]/self::{element}'; 
                    $subQueryType[$counter] = 'lookBehind';
                    $counter++;//go to next subquery 
                } else if ($word[$j]['token'] == 'lang'){
                    if ($currentType != 'attribute'){ 
                        $str = '@xml:lang = "' . $word[$j + 1]['token'] . '" or ';
                        $str .= 'starts-with(@xml:lang,';
                        $str .= 'concat("' . $word[$j + 1]['token'];
                        $str .= '", "-"))';
                        $subQuery[$counter] = $str; 
                        $subQueryType[$counter] = 'pseudoclass';
                        $counter++;//go to next subquery
                    }                    
                } else if ($word[$j]['token'] == 'contains'){
                    $subQuery[$counter] = '[contains(text(), "{element}")]'; 
                    $subQueryType[$counter] = 'lookAhead';
                    $counter++;//go to next subquery                    
                } else if ($word[$j]['token'] == 'nth-child'){
                    $subQuery[$counter] = '*[' . $word[$j + 2]['token'];
                    $subQuery[$counter] .= ']/self::{element}'; 
                    $subQueryType[$counter] = 'lookBehind';
                    $counter++;//go to next subquery                     
                } else if ($word[$j]['token'] == 'nth-last-child'){
                    $subQuery[$counter] = '*[' . ($word[$j + 2]['token'] - 1);
                    $subQuery[$counter] .= ']/self::{element}'; 
                    $subQueryType[$counter] = 'lookBehind'; 
                    $counter++;//go to next subquery
                } else if ($word[$j]['token'] == 'nth-of-type'){
                    $subQuery[$counter] = '[(position()';
                    $subQuery[$counter] .= $this->_parseNumeric($word[$j + 2]['token']);
                    $subQuery[$counter] .= ']';
                    $subQueryType[$counter] = 'pseudoclass';
                } else if ($word[$j]['token'] == 'nth-last-of-type'){
                    $subQuery[$counter] = '[(count() - position() + 1';
                    $subQuery[$counter] .= $this->_parseNumeric($word[$j + 2]['token']);
                    $subQuery[$counter] .= ']';
                    $subQueryType[$counter] = 'pseudoclass';
                } else if ($word[$j]['token'] == 'last-child'){
                    $subQuery[$counter] = '*[last()]/self::{element}'; 
                    $subQueryType[$counter] = 'lookBehind';
                    $counter++;//go to next subquery 
                } else if ($word[$j]['token'] == 'first-of-type'){
                    $subQuery[$counter] = '[1]'; 
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery
                } else if ($word[$j]['token'] == 'last-of-type'){
                    $subQuery[$counter] = '[last()]'; 
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery
                } else if ($word[$j]['token'] == 'only-child'){
                    $subQuery[$counter] = '[count(preceding-sibling::*) +';
                    $subQuery[$counter] .= 'count(following-sibling::*) = 0]';
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery 
                } else if ($word[$j]['token'] == 'only-of-type'){
                    $subQuery[$counter] = '[count(../{element} = 1)]'; 
                    $subQueryType[$counter] = 'lookBehind';
                    $counter++;//go to next subquery                     
                } else if ($word[$j]['token'] == 'empty'){
                    $subQuery[$counter] = '[count(*)=0]'; 
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery 
                } else if ($word[$j]['token'] == 'enabled'){
                    $subQuery[$counter] = '[not(@disabled)]'; 
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery 
                } else if ($word[$j]['token'] == 'disabled'){
                    $subQuery[$counter] = '[@disabled]'; 
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery 
                } else if ($word[$j]['token'] == 'checked'){
                    $subQuery[$counter] = '[@checked]'; 
                    $subQueryType[$counter] = 'pseudoclass';
                    $counter++;//go to next subquery   
                } else if ($word[$j]['token'] == 'not'){
                    $subQuery[$counter] = '[not({element})]'; 
                    $subQueryType[$counter] = 'lookAheadReplace';
                    $counter++;//go to next subquery 
                }            
                
            }
        }
        //before imploding the array we have to do further processing
        $length = count($subQuery);
        for($j = 0; $j < $length; $j++){
            //make sure that before an element of the type class or id there is
            // a tag or a *. If not add a * at the beguinning of the query
            if ($subQueryType[$j] == 'class' || $subQueryType[$j] == 'id') {
                if ($subQueryType[$j-1] == 'tag' 
                    || $subQueryType[$j-1] == 'universal'
                    || $subQueryType[$j-1] == 'attribute'
                    || $subQueryType[$j-1] == 'class'   
                    || $subQueryType[$j-1] == 'id') {
                    //stick together this entry with the previous one so we
                    //can pass it to potential pseudodelectors
                    $subQuery[$j] = $subQuery[$j-1] . $subQuery[$j];
                    $subQuery[$j-1] = '';
                } else {
                    //stick a '*' universal selector at the beguinning
                    $subQuery[$j] = '*' . $subQuery[$j];
                }                
            } else if ($subQueryType[$j] == 'lookBehind') {
                $subQuery[$j] = \str_replace('{element}',
                                                $subQuery[$j-1],
                                                $subQuery[$j]
                                                );
                $subQuery[$j-1] = '';
            } else if ($subQueryType[$j] == 'lookAheadReplace') {
                $subQuery[$j] = \str_replace('{element}',
                                                $subQuery[$j+1],
                                                $subQuery[$j]
                                                );
                $subQuery[$j+1] = '';
                $subQueryType[$j+1] = '';
            }
        }
        $query = implode('', $subQuery);        
        return array($query, $specificity);
    }
    
    /**
     * This method parses the numeric formulas
     * 
     * @param string $numbers
     * @return string
     * @access private
     */
    private function _parseNumeric($numbers)
    {
        $number = \trim($numbers);
        $result = ' = 0)'; 
        if (\is_numeric($number)) {
            $result = ' = ' . $number . ')';
        } else if ($number == 'even'){
            $result = ' mod 2 = 0)';
        } else if ($number == 'odd'){
            $result = ' mod 2 = 1)';
        } else {
            $regex = '/([0-9]*)([ ]*)n([ ]*)\+([ ]*)([0-9]*)/i';
            \preg_match($regex, $numbers, $matches);
            if (isset($matches[1]) && isset($matches[2])){
                $result = '-' . $matches[2] . ')  mod ' .  $matches[1] . '= 0';
            }
        }
        return $result;
    }
    
    /**
     * This method builds the subquery associated with attribute CSS selectors
     * 
     *
     * @param string $operand possible values are:'^', '$', '|', '!', '~', 
     * '*', '='
     * @param int $pos
     * @param array $word
     * @return string
     * @access private
     */
    private function _xpathAttribute($operand, $pos, $word)
    {
        $str = '';
        if ($operand == '*') {
            $str = 'contains(@' . $word[$pos - 1]['token'] .',';
            $str .= '"' . $word[$pos + 2]['token'] . '")';
        }else if ($operand == '^') {
            $str = 'starts-with(@' . $word[$pos - 1]['token'] .',';
            $str .= '"' . $word[$pos + 2]['token'] . '")';
        }else if ($operand == '$') {
            $str = 'ends-with(@' . $word[$pos - 1]['token'] .',';
            $str .= '"' . $word[$pos + 2]['token'] . '")';
        }else if ($operand == '~') {
            $str = 'contains(concat(" ", @' . $word[$pos - 1]['token'];
            $str .= ', " ")," ' . $word[$pos + 2]['token'] . ' ")';
        }else if ($operand == '=') {
            $str = '@' . $word[$pos - 1]['token'] . '=';
            $str .= $word[$pos + 1]['token'];
        }else if ($operand == '!') {
            $str = '@' . $word[$pos - 1]['token'] . '!=';
            $str .= $word[$pos + 2]['token'];
        }else if ($operand == '|') {//this can only be used with the lang attr
            $str = '@lang = "' . $word[$pos + 2]['token'] . '" or ';
            $str .= 'starts-with(@lang, concat("' . $word[$pos + 2]['token'];
            $str .= '", "-"))';
        }
        
        return $str;
    }

}