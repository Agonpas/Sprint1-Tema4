<?php
include('Dado.php');


do {
    echo " 0-No lanzar mas dados \n 1-Lanzar un dado. \n 2-Lanzar cinco dados. \n 3-Elegir numero de dados a tirar. \n";
    $eleccion = fgets(STDIN);
    switch ($eleccion) {
        case 0:
            echo "Gracias por jugar" . PHP_EOL;
            break;

        case 1:
            lanzarDado();
            break;
    
        case 2:
            lanzarCincoDados();
            break;

        case 3:
            elegirNumeroDados();
            break;
    
        default:
            echo "Opción no valida";
    }

} while ($eleccion != 0);
echo "El total de tiradas es: " . Dado::verTiradasTotales() . PHP_EOL;


function lanzarDado() {
    $dados = array() ; // creamos el Array para instanciar los dados dentro
    for ($i = 0; $i < 1; $i++) {
        $dados[] = new Dado; // en cada iteración se crea un nuevo Dado y se almacena dentro del array $dados
    }
    /*realizamos la tirada de los 5 dados*/
    $numeroDado = 0;
    foreach ($dados as $dados => $dado) {
        $dado->tirarDado();
        $numeroDado += 1;
        echo "El resultado del dado " . $numeroDado . " es: " . $dado->verTirada() . PHP_EOL;
    }
}
function lanzarCincoDados() {
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
}
function elegirNumeroDados() {
    echo "¿Cuantos dados quieres tirar?";
    $numeroDados = trim(fgets(STDIN));
    for ($i = 1; $i <= $numeroDados; $i++) {
        $dado = new Dado;
        $dado ->tirarDado();
        echo "La tirada del dado " . $i . "- es " . $dado->verTirada() . PHP_EOL;
    }
}
?>