<?php
include_once('Shape.php');
class Rectangulo extends Shape{
    public function area(){ //definimos el método formula para el rectángulo
        return $this -> base * $this -> altura;
    }
}


?>