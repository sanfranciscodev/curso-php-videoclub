<?php
/*
Clase: Juego
Clase para representar a los juegos que alquila el videoclub.
*/



class Juego extends Producto
{

    /* Variables de instancia */

    private $plataforma;
    private $genero;



    /* Constructores */

    public function __construct(string $nombre, float $precio, string $plataforma, string $genero)
    {
        parent::__construct($nombre, $precio);
        $this->plataforma = $plataforma;
        $this->genero = $genero;
    }



    /* Accessors y Mutators */

    public function getPlataforma() : string
    {
        return $this->plataforma;
    }

    public function setPlataforma(string $plataforma)
    {
        $this->plataforma = $plataforma;
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
