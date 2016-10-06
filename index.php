<?php
require('vendor/autoload.php');

use App\Videoclub\Videoclub;
use App\Videoclub\Cliente;
use App\Videoclub\Producto;
use App\Videoclub\Juego;
use App\Videoclub\Cd;
use App\Videoclub\Pelicula;

$videoclub = new Videoclub("Copias 100% legales");
echo "Videoclub: " . $videoclub->getNombre() . "<br><br>";

$cliente1 = new Cliente("Ivan");
$cliente2 = new Cliente("Piqui");

$videoclub->nuevoCliente($cliente1);
$videoclub->nuevoCliente($cliente2);

echo "Clientes de la tienda: ";
$clientesVideoclub = $videoclub->getClientes();

foreach ($clientesVideoclub as $cliente) {
  echo "<br>" . $cliente->getNombre();
}

echo "<br><br>";

$pelicula = new Pelicula("Una pelicula", 554.34, "es_es", 180, "Accion");
$juego = new Juego("Juego nuevo", 1090.40, "Ps4", "Aventuras");

$videoclub->nuevoProducto($pelicula);
$videoclub->nuevoProducto($juego);

echo "Productos disponibles: ";
$productosVideoclub = $videoclub->getProductos();

foreach ($productosVideoclub as $producto) {
  echo "<br>" . $producto->getNombre() .
       " - Precio: $" . $producto->getPrecio() .
       " - Genero: " . $producto->getGenero();
}

echo "<br><br>";
