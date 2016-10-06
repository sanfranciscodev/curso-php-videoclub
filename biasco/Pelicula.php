<?php
namespace App\Ejercicios\VideoClub\Entities;

final class Pelicula extends Producto
{
    private $idioma;
    private $duracion;
    private $genero;
    
    public function __construct(string $idioma, string $duracion, string $genero)
  {
       parent:: __construct(string $nombre, float $precio);
      
        $this->idioma = $idioma;
        $this->duracion = $duracion;
        $this->genero = $genero;  
  }
    
    public function getIdioma()
    {
        return $this->idioma;
    }
    
    public function getDuracion()
    {
        return $this->duracion;
    }
    
    public function getGenero()
    {
        return $this->genero;
    }
}
  