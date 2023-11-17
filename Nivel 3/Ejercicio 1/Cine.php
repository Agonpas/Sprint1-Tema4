<?php
include('Pelicula.php');
class Cine {
    private $nombre;
    private $poblacion;
    private $peliculas = array();
    /*constructor*/
    public function __construct($nombre, $poblacion) {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
    }
     /*setters*/
     public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setPoblacion($poblacion) {
        $this->poblacion = $poblacion;
    }
    /*Función añadir peliculas*/
    public function agregarPeliculas(Pelicula $pelicula) { //la función nos crea nueva instancia Pelicula y la agrega al array Peliculas
        $this->peliculas[] = $pelicula;
    }
    /*getters*/
    public function getNombre() {
        return $this->nombre;
    }
    public function getPoblacion() {
        return $this->poblacion;
    }
    public function getPeliculas() {
        return $this->peliculas;
    }
    /*Función mara mostrar todos los datos*/
    public function mostrarDatos() {
        echo PHP_EOL . "+ El cine " . $this->getNombre() . " en la población " . $this->getPoblacion() . " tiene en cartelera: " . PHP_EOL;
        foreach ($this->getPeliculas() as $pelicula) {
            echo " - La película " . $pelicula->getTitulo() . " con duración de " . $pelicula->getDuracion() . " y dirigida por " . $pelicula->getDirector() . PHP_EOL;
        }
    }
    /* Obtener película con mayor duración de cada cine*/
    public function obtenerPeliculaMasLarga() {
        $peliculaMasLarga = null;
        foreach ($this->peliculas as $pelicula) {
            if (!$peliculaMasLarga || $pelicula->getDuracion() > $peliculaMasLarga->getDuracion()) {
                $peliculaMasLarga = $pelicula;
            }
        }

        return $peliculaMasLarga;
    }
}   
?>