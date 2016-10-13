<?php 

namespace App\VideoClub;
class VideoClub
{
  private $nombre;
  
  public function __construct(String $nombre )
  {
    $this->nombre = $nombre;
    $this->clientes = array();
    $this->productos = array();
  }
  
  public function getNombre() : String
  {
    return $this->nombre;  
  }  
  
  
  public function getClientes()
  {
    return $this->clientes;  
  }    
  
  public function getProductos()
  {
    return $this->productos;  
  } 
  
  public function setNombre(String nombre)
  {
     $this->nombre = $nombre;  
  }
   
  public function agregarCliente(Cliente cliente)
  {
     $this->clientes[] = $cliente;  
  }
  
  public function agregarCliente(Producto producto)
  {
     $this->productos[] = $producto;  
  }  
    
}