<?php
include_once('Cine.php');
include_once('Pelicula.php');

/*creamos unos cines*/
$cine1 = new Cine("Bosque", "Barcelona");
$cine2 = new Cine("Yelmo", "Sant Cugat");
$cine3 = new Cine("Parc Vallés", "Terrassa");
/* añadimos peliculas*/
$cine1->agregarPeliculas(new Pelicula("Blade Runner", "117", "Rdley Scott"));
$cine1->agregarPeliculas(new Pelicula("The Thing", "105", "John Carpenter"));
$cine2->agregarPeliculas(new Pelicula("Taxi Driver", "113", "Martin Scorsese"));
$cine2->agregarPeliculas(new Pelicula("Amanece que no es poco", "106", "Jose Luis Cuerda"));
$cine3->agregarPeliculas(new Pelicula("Alien", "116", "Ridley Scott"));
$cine3->agregarPeliculas(new Pelicula("Pulp Fiction", "153", "Quentin Tarantino"));

$cines = [$cine1, $cine2, $cine3];
/*creamos menu para probar las diferentes funciones*/
do {
    echo " 0-Salir de la aplicación \n 1-Mostrar todos los datos. \n 2-Mostrar película más larga de cada cine. \n 3-Buscar por director.";
    $eleccion = fgets(STDIN);
    switch ($eleccion) {
        case 0:
            echo "Gracias por usar la aplicación" . PHP_EOL;
            break;

        case 1:
            mostrarTodosDatos($cines);
            break;
    
        case 2:
            buscarPeliculaLarga($cines);
            break;

        case 3:
            echo "Introduce el nombre del director: " . PHP_EOL;
            $nombreDirector = trim(fgets(STDIN));
            buscarPorDirector($cines, $nombreDirector);
            break;
    
        default:
            echo "Opción no valida";
    }

} while ($eleccion != 0);
/*creamos función para mostrar todos los datos*/
function mostrarTodosDatos($cines){
    foreach ($cines as $cine) { //recorremos todo el array con los cines
        $cine->mostrarDatos(); // a cada iteración aplicamos la función de la clase Cine mostrarDatos
    }
}
/*creamos función para buscar pelicula más larga en cada cine*/
function buscarPeliculaLarga($cines){
    foreach ($cines as $cine) {
        $peliculaMasLarga = $cine->obtenerPeliculaMasLarga();//a cada iteración aplicamos la función de la clase Cine mobtenerPeliculaMasLarga
        /*damos la información de la película con la duración mayor de cada cine*/
        echo PHP_EOL . "En el cine " . $cine->getNombre() . " la película con mayor duración es: ";
        /*este if else nos da mensaje de si no hay peliculas*/
        if ($peliculaMasLarga) {
            echo $peliculaMasLarga->getTitulo() . " con " . $peliculaMasLarga->getDuracion() . " minutos." . PHP_EOL;
        } else {
            echo "No hay películas." . PHP_EOL;
        }
    }
}
/*creamos función para buscar directores*/
function buscarPorDirector($cines, $nombreDirector){ // el método recibe el array de cines y el nombre que buscamos entrado por teclado
    echo PHP_EOL . "Buscando películas del director " . $nombreDirector . ":" . PHP_EOL;
    foreach ($cines as $cine) { //primer array recorre los cines
        $peliculasDelDirector = array(); //creamos array para almacenar los resultados que coinciden con la busqueda
        foreach ($cine->getPeliculas() as $pelicula) { //recorremos las peliculas de cada cine
            if ($pelicula->getDirector() == $nombreDirector) { //comparamos el atributo director con el nombre buscado en caso de coincidencia
                $peliculasDelDirector[] = $pelicula; //almacenamos la pelicula en el array que hemos creado para este fin
            }
        }
        if (count($peliculasDelDirector) > 0) { //en el caso de que hayamos tenido coincidencias damos la información
            echo "En el cine " . $cine->getNombre() . ", las películas dirigidas por " . $nombreDirector . " son: " . PHP_EOL;
            foreach ($peliculasDelDirector as $pelicula) {
                echo " - " . $pelicula->getTitulo() . " con una duración de " . $pelicula->getDuracion() . " minutos." . PHP_EOL;
            }
        }
    }
}




?>