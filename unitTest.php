<?php
require_once 'fb.php';
use PHPUnit\Framework\TestCase;

class fbTest extends \PHPUnit\Framework\TestCase{
    public function test_Linio3(){
        $expected = array("1","2","Linio");
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->Linio(3);
        $this->assertEquals($expected, $result);
    }

    public function test_Linio15(){
        $expected = array("1","2","Linio","4","IT","Linio","7","8","Linio","IT","11","Linio","13","14","Linianos");
        $fizzbuzz = new FizzBuzz();
        $result = $fizzbuzz->Linio(15);
        $this->assertEquals($expected, $result);
    }
}


?>