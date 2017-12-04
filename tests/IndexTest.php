<?php


include(dirname(__FILE__)."/../searchandrandom.php");
class IndexTest extends PHPUnit_Framework_TestCase
{
    public function testSearchBoxInputShoulReturnTrue(){
        $expected = true;
        $this->assertEquals($expected, isValid("Heineken"));
    }

    public function testSearchBoxInputShoulReturnFalse(){
        $expected = false;
        $this->assertEquals($expected, isValid("You're My Boy, Blue"));
    }
}