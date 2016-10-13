<?php 

namespace App\VideoClub;
class Cd extends Producto
{
  private $duracion;
  private $genero;
  public function __construct(int $duracion, String $genero )
  {
    $this->duracion = $duracion;
    $this->enero = $genero;
  
  }
  
  
  public function getDuracion(): int
  {
     return $duracion;  
  }
  
  public function getGenero(): String
  {
     return $genero;  
  }
  
  public function setDuracion(int $duracion)
  {
     $this->duracion = $duracion;  
  }
  
  public function setGenero(String  $genero)
  {
     $this->genero = $genero;  
  }
  
}