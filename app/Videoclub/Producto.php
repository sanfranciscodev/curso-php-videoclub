<?php
namespace App\Videoclub;

class Producto
{
  protected $nombre;
  protected $precio;

  public function __construct(string $_nombre, float $_precio)
  {
    $this->nombre = $_nombre;
    $this->precio = $_precio;
  }

  public function getNombre() : string
  {
    return $this->nombre;
  }

  public function getPrecio() : float
  {
    return $this->precio;
  }
}
