<?php 

namespace App\VideoClub;
class Juego extends Producto
{
  private $plataforma;
  private $genero;
  public function __construct(int $plataforma, String $genero )
  {
    $this->plataforma = $plataforma;
    $this->genero = $genero;
  
  }
  
  public function getPlataforma(): String
  {
     return this->$plataforma;  
  }
  
  public function setPlataforma(String $plataforma)
  {
     $this->plataforma = $plataforma;  
  }
  
  public function getGenero(): String
  {
     return this->$genero;  
  }
  
  public function setGenero(String $genero)
  {
     $this->genero = $genero;  
  }
}