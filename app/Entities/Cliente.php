<?php 

namespace App\VideoClub;
class Cliente
{
  private $nombre;
  private  $productos;
  public function __construct(String $nombre )
  {
    $this->nombre = $nombre;
    $this->productos = array();
  
  }
   
  public function getNombre(): String
  {
     return this->$nombre;  
  }
  
  public function setNombre(String $nombre)
  {
     $this->nombre = $nombre;  
  }
  
   public function getProductos()
  {
     return $this->productos;  
  }
   
  public function agregarProducto(Producto producto)
  {
     $this->productos[] = $producto;  
  }
  
  
}