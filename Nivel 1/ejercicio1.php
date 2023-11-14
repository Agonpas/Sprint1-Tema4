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
/* instanciamos un objeto de la clase Employee y seteamos sus atributos mediante el método initialize */
$trabajador1 = new Employee();
$trabajador1 -> initialize("Alberto",5000);
/* instanciamos otro objeto de la clase Employee y seteamos sus atributos mediante los métodos setNombre y setSueldo */
$trabajador2 = new Employee();
$trabajador2 -> setNombre("Irene");
$trabajador2 -> setSueldo(7500);
/* instanciamos un terecer objeto de la clase Employee y seteamos sus atributos mediante el método initialize */
$trabajador3 = new Employee();
$trabajador3 -> initialize("Eva",15000);
/* mostramos los datos del trabajador1 mediante los getters y aplicamos el método impuestos*/
echo PHP_EOL;
echo "El nombre del trabajador es: " . $trabajador1 -> getNombre();
echo PHP_EOL;
echo "El sueldo del trabajador es: " . $trabajador1 -> getSueldo();
echo PHP_EOL;
echo "La situación de impuestos del trabajador es: " . $trabajador1 -> impuesto();
echo PHP_EOL;
/* ahora para mostrar los datos del resto de trabajadores aplicamos el método obtenerTodosLosDatos*/
$todosLosDatosTrabajador2 = $trabajador2 -> obtenerTodosLosDatos();
$todosLosDatosTrabajador3 = $trabajador3 -> obtenerTodosLosDatos();
/* mostramos los datos del ressto de trabajadores */
echo PHP_EOL;
print_r($todosLosDatosTrabajador2);
echo PHP_EOL;
print_r($todosLosDatosTrabajador3);
echo PHP_EOL;
?>