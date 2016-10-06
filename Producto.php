<?php
/*
Clase: Producto
Clase abstracta para representar a los productos que alquila el videoclub.
*/



abstract class Producto
{

    /* Variables de instancia */

    private $nombre;
    private $precio;



    /* Constructores */

    public function __construct(string $nombre, float $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }



    /* Accessors y Mutators */

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }


    public function getPrecio() : float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio)
    {
        $this->precio = $precio;
    }



    /* Métodos */

}
