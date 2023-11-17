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
function mostrarTodosDatos($cines){
    foreach ($cines as $cine) {
        $cine->mostrarDatos();
    }
}
/*mostramo todos los datos*/
function buscarPeliculaLarga($cines){
    foreach ($cines as $cine) {
        $peliculaMasLarga = $cine->obtenerPeliculaMasLarga();
        
        echo PHP_EOL . "En el cine " . $cine->getNombre() . " la película con mayor duración es: ";
        if ($peliculaMasLarga) {
            echo $peliculaMasLarga->getTitulo() . " con " . $peliculaMasLarga->getDuracion() . " minutos." . PHP_EOL;
        } else {
            echo "No hay películas." . PHP_EOL;
        }
    }
}
function buscarPorDirector($cines, $nombreDirector){
    echo PHP_EOL . "Buscando películas del director " . $nombreDirector . ":" . PHP_EOL;
    foreach ($cines as $cine) {
        $peliculasDelDirector = array();
        foreach ($cine->getPeliculas() as $pelicula) {
            if ($pelicula->getDirector() == $nombreDirector) {
                $peliculasDelDirector[] = $pelicula;
            }
        }
        if (count($peliculasDelDirector) > 0) {
            echo "En el cine " . $cine->getNombre() . ", las películas dirigidas por " . $nombreDirector . " son: " . PHP_EOL;
            foreach ($peliculasDelDirector as $pelicula) {
                echo " - " . $pelicula->getTitulo() . " con una duración de " . $pelicula->getDuracion() . " minutos." . PHP_EOL;
            }
        }
    }
}




?>