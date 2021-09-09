<?php

require_once 'suma.php';
require_once 'resta.php';
require_once 'producto.php';
require_once 'division.php';

 //Guardamos el valor de los numeros ingresados en 2 variables:
$a1=$_GET['a1'];
$a2=$_GET['a2'];


$s = new Suma($a1, $a2, '+');
$r = new Resta($a1, $a2, '-');
$p = new Producto($a1, $a2, '*');
$d = new Division($a1, $a2, '/');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Datos de las Operaciones</title>
    </head>
    <body>
      <div class="container">
      <header class="col-12 jumbotron">
        <h1>Datos de las Operaciones</h1>
      </header>
      <main role="main" class="col-12 row">
        <article>
            <p> <?php echo  $s;?> </p>
            <p> <?php echo  $r;?> </p>
            <p> <?php echo  $p;?> </p>
            <p> <?php echo  $d;?> </p>
        </article>
      </main>
        <footer class="col-12 text-muted">
            <p>Este es el TP Nº3: GIT para IS 2 (DS)</p>
        </footer>
    </div>
    </body>
</html>
    
