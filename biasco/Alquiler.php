<?php
namespace App\Ejercicios\VideoClub\Entities;

class Alquiler
{
    private $clientes;
    private $productos;
    private $productosAlquilados;
    private $fecha;
    
    public function __construct(Date $fecha)
  {
    $this->fecha = $fecha;  
    $this->clientes = array();
    $this->productos = array();
    $this->productosAlquilados = array();   
  }
    
  public function agregarProductos($producto)
  {
      $this->productos[] = $producto;
  }
    
  public function agregarClientes($cliente)
  {
      $this->clientes[] = $cliente;
  }
    
  public function getProducto()
  {
      return $this->productos;
  }
    
   public function getCliente()
   {
       return $this->clientes;
   }
    
   public function getFecha()
   {
       return $this->fecha;
   }
    
   public function getProductosAlquilados()
    {
        return $this->productosAlquilados;
    }
    
    public function alquilarProducto($producto)
	{
		$this->productosAlquilados[] = $producto;
		return true;
	} 
    
   public function alquilar($cliente, $producto)
   {
      $cliente->alquilarProducto($producto);
   }
}