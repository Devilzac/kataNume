<?php
use Calc\NumToRomanic;

require "./vendor/autoload.php";

print_r(substr("adef", 0,1));


$roman = new NumToRomanic();
var_dump(substr(55, 2,1));
var_dump($roman->calculate(51));

