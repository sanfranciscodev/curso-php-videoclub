<?php
/*
Clase: Pelicula
Clase para representar a las películas que alquila el videoclub.
*/
namespace App\EjercicioVideoclub; 


class Pelicula extends Producto
{

    /* Variables de instancia */

    private $idioma;
    private $duracion;              // duración en minutos
    private $genero;



    /* Constructores */

    public function __construct(string $nombre, float $precio, string $idioma, int $duracion, string $genero)
    {
        parent::__construct($nombre, $precio);
        $this->idioma = $idioma;
        $this->duracion = $duracion;
        $this->genero = $genero;
    }



    /* Accessors y Mutators */

    public function getIdioma() : string
    {
        return $this->idioma;
    }

    public function setIdioma(string $idioma)
    {
        $this->idioma = $idioma;
    }


    public function getDuracion() : int
    {
        return $this->duracion;
    }

    public function setDuracion(int $duracion)
    {
        $this->duracion = $duracion;
    }


    public function getGenero() : string
    {
        return $this->genero;
    }

    public function setGenero(string $genero)
    {
        $this->genero = $genero;
    }



    /* Métodos */

}