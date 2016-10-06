<?php
namespace App\Ejercicios\VideoClub\Entities;

class Cliente
{
    private $nombre;
    private $apellido;
    private $dni;
    
    public function __construct(string $nombre, string $apellido, int $dni)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->dni = $dni; 
  }
    
    public function getNombre()
    {
        $this->nombre;
    }
    
    public function getApellido()
    {
        $this->apellido;
    }
    
    public function getDni()
    {
        $this->dni;
    }
}