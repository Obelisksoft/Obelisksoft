<?php

require_once ROOT . 'libs' . DS . 'phpunit.phar';

class Test extends PHPUnit_Framework_TestCase{
   
   public function testCanBeNegated(){
        // Arrange
        $a = new rolController();

        // Act
        $b = $a->createRole();

        // Assert
        $fixture = array();

        $this->assertEquals(0, sizeof($fixture));
    }
}