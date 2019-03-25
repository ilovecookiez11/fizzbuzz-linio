<?php
require_once 'fb.php';

    $fizzbuzz = new FizzBuzz();
    $arreglo = $fizzbuzz->Linio(100);

    foreach($arreglo as $value){
        echo $value . "<br>";    
    }
?>