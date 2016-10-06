<?php
namespace App\Videoclub;

class Videoclub
{
  private $nombre;
  private $clientes = [];
  private $productos = [];

  public function __construct(string $_nombre)
  {
    $this->nombre = $_nombre;
  }

  public function getNombre() : string
  {
    return $this->nombre;
  }

  public function getClientes() : array
  {
    return $this->clientes;
  }

  public function getProductos() : array
  {
    return $this->productos;
  }

  public function nuevoProducto(Producto $productoNuevo)
  {
    array_push($this->productos, $productoNuevo);
  }

  public function nuevoCliente(Cliente $clienteNuevo)
  {
    array_push($this->clientes, $clienteNuevo);
  }

}
