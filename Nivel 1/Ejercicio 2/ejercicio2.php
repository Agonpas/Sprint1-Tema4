<?php
include_once('Triangulo.php');
include_once('Rectangulo.php');
/* vamos a crear un triangulo y un cuadrado*/
$triangulo1 = new Triangulo(5,6); //creamos el triángulo y damos los valores de base y altura
$cuadrado1 = new Rectangulo(7,5); //creamos el rectángulo y damos los valores de base y altura
/* mostramos el triángulo y el rectángulo*/
echo PHP_EOL;
echo "Área del triángulo: " . $triangulo1->area() . PHP_EOL;
echo "Área del rectángulo: " . $cuadrado1->area() . PHP_EOL;
echo PHP_EOL;

?>