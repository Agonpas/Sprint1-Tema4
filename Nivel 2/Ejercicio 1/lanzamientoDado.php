<?php
$solo1Dado = ["As", "K", "Q", "J", "8", "7"];
$cincoDados = [
    "Dado 1"=> ["As", "K", "Q", "J", "8", "7"],
    "Dado 2"=> ["As", "K", "Q", "J", "8", "7"],
    "Dado 3"=> ["As", "K", "Q", "J", "8", "7"],
    "Dado 4"=> ["As", "K", "Q", "J", "8", "7"],
    "Dado 5"=> ["As", "K", "Q", "J", "8", "7"]
];
$tiradas = 0;


do {
    echo " 0-No lanzar mas dados \n 1-Lanzar un dado. \n 2-Lanzar cinco dados \n";
    $eleccion = fgets(STDIN);
    switch ($eleccion) {
        case 0:
            echo "Gracias por jugar" . PHP_EOL;
            break;

        case 1:
            lanzarDado($solo1Dado);
            $tiradas +=1;
            break;
    
        case 2:
            lanzarCincoDados($cincoDados);
            $tiradas +=1;
            break;
    
        default:
            echo "Opcion no valida";
    }

} while ($eleccion != 0);
echo "Has tirado dados un total de " . $tiradas . " vecces";


function lanzarDado($solo1Dado) {
    $resultadoDado1 = $solo1Dado[array_rand($solo1Dado)];
    echo "El resultado del dado 1 es " . $resultadoDado1 . PHP_EOL;
}
function lanzarCincoDados($cincoDados) {
    foreach ($cincoDados as $dado => $cara) {
        $resultado = $cara[array_rand($cara)];
        echo "El resutltado del dado " . $dado . " es: "  . $resultado . PHP_EOL;
    }

}
?>