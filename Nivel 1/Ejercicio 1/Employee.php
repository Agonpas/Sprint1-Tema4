<?php
class Employee {
    /*atributos*/
    private $nombre;
    private $sueldo;
    /*método initialize*/
    public function initialize($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    /*setters*/
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setSueldo($sueldo) {
        $this->sueldo = $sueldo;
    }
    /*getters*/
    public function getNombre() {
        return $this->nombre;
    }
    public function getSueldo() {
        return $this->sueldo;
    }
    /* método pagar impuestos*/
    public function impuesto() {
        if ($this ->sueldo > 6000) {
            return "Tiene que pagar impuestos";
        } else {
            return "No tiene que pagar impuestos";
        }
    }
    /* creamos un metodo que agrupe todos los metodos en un array asociativo */
    public function obtenerTodosLosDatos() {
        $todosLosDatos = [
            'Nombre' => $this -> getNombre(),
            'Sueldo' => $this -> getSueldo(),
            'Impuestos' => $this -> impuesto()
        ];
        return $todosLosDatos;
    }
}

?>