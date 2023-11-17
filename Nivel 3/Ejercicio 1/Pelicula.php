<?php
class Pelicula {
    private $titulo;
    private $duracion;
    private $director;
    /*constructor*/
    public function __construct($titulo, $duracion, $director) {
        $this->titulo = $titulo;
        $this->duracion = $duracion;
        $this->director = $director;
    }
    /*setters*/
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function setDuracion($duracion) {
        $this->duracion = $duracion;
    }
    public function setDirector($director) {
        $this->director = $director;
    }
    /*getters*/
    public function getTitulo() {
        return $this->titulo;
    }
    public function getDuracion() {
        return $this->duracion;
    }
    public function getDirector() {
        return $this->director;
    }
}
?>