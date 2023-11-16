<?php
include('Dado.php');
/*vamos a instanciar 5 dados dentro de un array mediante un bucle for*/
$dados = array() ; // creamos el Array para instanciar los dados dentro
for ($i = 0; $i < 5; $i++) {
    $dados[] = new Dado; // en cada iteración se crea un nuevo Dado y se almacena dentro del array $dados
}
/*realizamos la tirada de los 5 dados*/
$numeroDado = 0;
foreach ($dados as $dados => $dado) {
    $dado->tirarDado();
    $numeroDado += 1;
    echo "El resultado del dado " . $numeroDado . " es: " . $dado->verTirada() . PHP_EOL;
}
/*vemos el total de tiradas*/
echo "El total de tiradas es: " . Dado::verTiradasTotales() . PHP_EOL;
?>