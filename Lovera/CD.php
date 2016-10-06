<?php

class Cd extends Producto
{
    private $genero;
    private $duracion

     protected function getDuracion()
    {
        return $this->duracion;
    }

    protected function getGenero()
    {
        return $this->genero;
    }
}
