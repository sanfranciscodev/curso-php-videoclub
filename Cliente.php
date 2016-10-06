<?php
/*
Clase: Cliente
Clase para representar a los clientes del videoclub.
*/

namespace App\EjercicioVideoclub; 

class Cliente
{

    /* Variables de instancia */

    private $nombre;
    private $alquilados;



    /* Constructores */

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $alquilados = [];
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



    /* Métodos */

    public function alquilar(Producto $producto)
    {
        $alquilados[$producto->getNombre()] = $producto;
    }
    
    
    public function devolver(string $nombreProducto)
    {
        if(in_array($nombreProducto, array_keys($alquilados))) {
            unset($alquilados[$nombreProducto]);
        }
    }
    
}