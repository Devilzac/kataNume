<?php
use Calc\NumToRomanic;

require "./vendor/autoload.php";



$roman = new NumToRomanic();
var_dump($roman->calculate(10));
?>
