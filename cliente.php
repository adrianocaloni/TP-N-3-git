<?php

require_once 'suma.php';
require_once 'resta.php';
require_once 'producto.php';
require_once 'division.php';


$s = new Suma(5, 15, '+');
$r = new Resta(4,60, '-');
$p = new Producto(7,16, '*');
$d = new Division(60,2, '/');


echo $s;
echo "<br/>";

echo $r;
echo "<br/>";

echo $p;
echo "<br/>";

echo $d;
echo "<br/>";