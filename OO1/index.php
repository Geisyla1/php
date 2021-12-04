<?php
require 'calculadora.php';
$calc = new Calculadora(12,2);
echo $calc->add()."</br>";

$calc = new Calculadora(15,12);
echo $calc->sub()."</br>";

$calc = new Calculadora(20,2);
echo $calc->multiply()."</br>";;

$calc = new Calculadora(20,2);
echo $calc ->divide()."</br>";
