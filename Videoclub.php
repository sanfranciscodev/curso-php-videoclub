<?php
/*
Clase: Videoclub
Representa un videoclub, que tiene un nombre, un conjunto de clientes, y un conjunto de
productos para alquilar.
Los clientes y los productos se guardan en dos arrays asociativos distintos.
Para los clientes se usa como clave al nombre, y como valor al objeto cliente.
Para los productos, se usa como clave el nombre, y como valor un array de dos elementos,
siendo el primero el objeto Producto y el segundo la cantidad disponible.
*/
namespace App\EjercicioVideoclub; 


class Videoclub
{

    /* Variables de instancia */

    private $nombre;
    private $clientes;
    private $productos;



    /* Constructores */

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
        $clientes = array();
        $productos = array();
    }



    /* Accessors y Mutators */

    public function getNombre() : string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre) : void
    {
        $this->nombre = $nombre;
    }



    /* Métodos */

    public function agregarCliente(Cliente $cliente)
    {
        $this->clientes[$cliente->getNombre()] = $cliente;
    }


    public function agregarProducto(Producto $producto, int $cantidad)
    {
        $this->productos[$producto->getNombre()] = [$producto, $cantidad];
    }


    public function nombresDeClientes() : array
    {
        return array_keys($this->clientes);
    }


    public function nombresDeProductos() : array
    {
        return array_keys($this->productos);
    }


    public function existeCliente(string $cliente) : bool
    {
        return in_array($cliente, nombresDeClientes());
    }


    public function existeProducto(string $producto) : bool
    {
        return in_array($producto, nombresDeProductos());
    }

}

