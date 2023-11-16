<?php
class Dado{
    /*atributos*/
    private $caras = array ("As", "K", "Q", "J", "8", "7"); //definimos array son las caras del dado
    private $ultimaTirada; //almacenamos el resultado de la tirada
    private static $tiradasTotales = 0; //al ser private static nos suamrá todas las tiradas de todas las instancias de Dado iniciamos a 0

    /*funciones*/
    public function tirarDado() {
        $this->ultimaTirada = $this->caras[array_rand($this->caras)]; //almacenamos el valor aleatorio de cara en la variable ultimaTirada
        self::$tiradasTotales++; // suma 1 al valor de tiradas totales y lo retorna al private static $tiradasTotales (de todas las instancias)
    }
    public function verTirada() {
        return $this->ultimaTirada; // mostrtamos resultado de la tirada
    }
    public static function verTiradasTotales() {
        return self::$tiradasTotales; // nos muestra la suma de todas las tiradas
    }
}
?>