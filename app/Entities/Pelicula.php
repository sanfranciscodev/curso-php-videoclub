<?php 

namespace App\VideoClub;
class Pelicula extends Producto
{
  private $idioma;
  private $duracion;
  private $genero;
  public function __construct(String $idioma, int $duracion, String $genero )
  {
    $this->idioma = $idioma;
    $this->duracion = $duracion;
    $this->genero = $genero;
  
  }
  
  public function getIdioma(): String
  {
     return this->$Idioma;  
  }
  
  public function setIdioma(String $idioma)
  {
     $this->idioma = $idioma;  
  }
  
  public function getDuracion(): int
  {
     return this->$duracion;  
  }
  
  public function setGenero(int  $genero)
  {               
     $this->genero = $genero;  
  }
  
  public function getGenero(): String
  {
     return this->$genero;  
  }
  
  public function setPlataforma(String $plataforma)
  {
     $this->plataforma = $plataforma;  
  }
}