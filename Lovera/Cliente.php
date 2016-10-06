<?php

class Cliente
{
    private $_nombre;

    public function __construct($nombre)
    {
        $this->_nombre = nombre;
    }

    function getNombre()
    {
        return $this->nombre;
    }
}
