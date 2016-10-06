<?php
namespace App\Ejercicios\VideoClub\Entities;

class VideoClub
{
    private $nombre;
    private $direccion;
    private $alquileres;
  
  public function __construct(string $nombre, string $direccion)
  {
      $this->nombre = $nombre;
      $this->direccion = $direccion;
      $this->alquileres = array();
  }
  
  public function getNombre()
  {
      return $this->nombre;
  }
  
  public function getDireccion()
  {
      return $this->direccion;
  }
  
  public function getAlquiler()
  {
      return $this->alquileres;
  }
  
  public function agregarAlquileres($alquiler)
  {
      $this->alquileres[] = $alquiler;
  }
    
}