<?php

class Juego extends Producto
{
    private $nombre;
    private $genero;


    protected function getNombre()
    {
        return $this->nombre;
    }

    protected function getGenero()
    {
        return $this->genero;
    }
}
