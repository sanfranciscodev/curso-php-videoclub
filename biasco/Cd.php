<?php
namespace App\Ejercicios\VideoClub\Entities;

final class Cd extends Producto
{
    private $duracion;
    private $genero;
    
    public function __construct(Time $duracion, string $genero)
  {
      parent:: __construct(string $nombre, float $precio);
        
        $this->duracion = $duracion;
        $this->genero = $genero;
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
  