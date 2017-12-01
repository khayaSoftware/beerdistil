<?php


include(dirname(__FILE__)."/../searchandrandom.php");
class IndexTest extends PHPUnit_Framework_TestCase
{
    public function testTextValidationt(){
        $expected = true;
        $this->assertEquals($expected, isValid("Should-Work"));
    }
}