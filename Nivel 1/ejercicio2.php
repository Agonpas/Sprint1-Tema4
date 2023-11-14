<?php
/* creamos la clase y damos los atributos base y altura*/
class shape{
    protected $base;
    protected $altura;
    /*__construct es un método especial que se aplica por defecto al instanciar un objeto de la clase*/
    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }
    /* creamos el metodo area es un metodo abstracto, es común a las subclases pero se implementa de forma diferente en cada una*/
    public function area(){
    }
}
/* Pasamos a la creación de las subclases*/
class Triangulo extends shape{
    public function area(){ //definimos el método formula para el Triángulo
        return $this -> base * $this -> altura * 0.5;
    }
}
class Rectangulo extends shape{
    public function area(){ //definimos el método formula para el rectángulo
        return $this -> base * $this -> altura;
    }
}
/* vamos a crear un triangulo y un cuadrado*/
$triangulo1 = new Triangulo(5,6); //creamos el triángulo y damos los valores de base y altura
$cuadrado1 = new Rectangulo(7,5); //creamos el rectángulo y damos los valores de base y altura
/* mostramos el triángulo y el rectángulo*/
echo PHP_EOL;
echo "Área del triángulo: " . $triangulo1->area() . PHP_EOL;
echo "Área del rectángulo: " . $cuadrado1->area() . PHP_EOL;
echo PHP_EOL;

?>