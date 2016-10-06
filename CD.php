<?php
/*
Clase: CD
Clase para representar a los CDs que alquila el videoclub.
*/



class CD extends Producto
{

    /* Variables de instancia */

    private $duracion;              // duración en minutos
    private $genero;



    /* Constructores */

    public function __construct(string $nombre, float $precio, int $duracion, string $genero)
    {
        parent::__construct($nombre, $precio);
        $this->duracion = $duracion;
        $this->genero = $genero;
    }



    /* Accessors y Mutators */

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