<?php
$dado1 = ["As", "K", "Q", "J", "8", "7"];
echo "¿Quieres lanzar los dados? 1-Si. 2-No";
$eleccion = fgets(STDIN);
switch ($eleccion) {
    case 1:
        lanzarDado($dado1);
        break;

    case 2:
        echo "No lanzamos dados";
        break;

    default:
        echo "Opcion no valida";
}
function lanzarDado($dado1) {
    $resultadoDado1 = $dado1[array_rand($dado1)];
    echo "El resultado del dado 1 es " . $resultadoDado1;
}
?>