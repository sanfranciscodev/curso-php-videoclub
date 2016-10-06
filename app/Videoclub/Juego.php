<?php
namespace App\Videoclub;

class Juego extends Producto
{
  private $plataforma;
  private $genero;

  public function __construct(string $_nombre, float $_precio, string $_plataforma, string $_genero)
  {
    $this->nombre = $_nombre;
    $this->precio = $_precio;
    $this->plataforma = $_plataforma;
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
  public function getPlataforma() : string
  {
    return $this->plataforma;
  }

  public function getGenero() : string
  {
    return $this->genero;
  }
}
