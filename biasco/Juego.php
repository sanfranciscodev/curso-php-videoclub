<?php
namespace App\Ejercicios\VideoClub\Entities;

final class Juego extends Producto
{
    private $plataforma;
    private $genero;
    
    public function __construct(string $plataforma, string $genero)
  {
      parent:: __construct(string $nombre, float $precio);
        
        $this->plataforma = $plataforma;
        $this->genero = $genero;
  }
    
    public function getPlataforma()
    {
        return $this->plataforma;
    }
    
    public function getGenero()
    {
        return $this-genero;
    }
}