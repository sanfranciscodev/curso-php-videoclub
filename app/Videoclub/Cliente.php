<?php
namespace App\Videoclub;

class Cliente
{
  private $nombre;
  private $productos = [];

  public function __construct(string $_nombre)
  {
    $this->nombre = $_nombre;
  }

  public function getNombre() : string
  {
    return $this->nombre;
  }

  public function getProductos() : array
  {
    return $this->productos;
  }

  public function nuevoProducto(Producto $productoNuevo)
  {
    array_push($this->productos, $productoNuevo);
  }
}
