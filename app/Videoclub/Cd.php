<?php
namespace App\Videoclub;

class Cd extends Producto
{
  private $duracion;
  private $genero;

  public function __construct(string $_nombre, float $_precio, int $_duracion, string $_genero)
  {
    $this->nombre = $_nombre;
    $this->precio = $_precio;
    $this->duracion = $_duracion;
    $this->genero = $_genero;
  }

  public function getNombre() : string
  {
    return $this->nombre;
  }

  public function getPrecio() : float
  {
    return $this->precio;
  }

  public function getDuracion() : int
  {
    return $this->duracion;
  }

  public function getGenero() : string
  {
    return $this->genero;
  }
}
