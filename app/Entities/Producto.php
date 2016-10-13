<?php 

namespace App\VideoClub;
class Producto
{
  private $nombre;
  private $precio;
  public function __construct(int $precio, String $nombre )
  {
    $this->precio = $precio;
    $this->nombre = $nombre;
  
  }
  
  public function getPrecio(): int
  {
     return this->$precio;  
  }
  
  public function setPrecio(int $precio)
  {
     $this->precio = $precio;  
  }
  
  public function getNombre(): String
  {
     return this->$nombre;  
  }
  
  public function setNombre(String $nombre)
  {
     $this->nombre = $nombre;  
  }
  
}