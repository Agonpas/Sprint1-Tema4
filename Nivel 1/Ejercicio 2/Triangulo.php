<?php
include_once('Shape.php');
class Triangulo extends Shape{
    public function area(){ //definimos el método formula para el Triángulo
        return $this -> base * $this -> altura * 0.5;
    }
}

?>