<?php
namespace App\Ejercicios\VideoClub\Entities;

abstract class Producto
{
    protected $nombre;
    protected $precio;
    
  public function __construct(string $nombre, float $precio)
  {
      $this->nombre = $nombre;
      $this->precio = 35;
  }
    
  public function getNombre()
  {
      return $this->nombre;
  }
    
  abstract public function getPrecio();  
}