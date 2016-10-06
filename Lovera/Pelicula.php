<?php

class Pelicula extends Producto
{
    private $_duracion;
    private $_genero;
    private $_idioma;

     protected function getDuracion()
    {
        return $this->duracion;
    }

    protected function getGenero()
    {
        return $this->genero;
    }

     protected function getIdioma()
    {
        return $this->Idioma;
    }

}
