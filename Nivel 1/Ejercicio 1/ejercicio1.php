<?php
include 'Employee.php';
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