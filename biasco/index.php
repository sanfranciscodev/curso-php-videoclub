<?php
require('vendor/autoload.php');

use App\Ejercicios\VideoClub\Entities\Alquiler;
use App\Ejercicios\VideoClub\Entities\Cd;
use App\Ejercicios\VideoClub\Entities\Cliente;
use App\Ejercicios\VideoClub\Entities\Juego;
use App\Ejercicios\VideoClub\Entities\Pelicula;
use App\Ejercicios\VideoClub\Entities\Producto;
use App\Ejercicios\VideoClub\Entities\VideoClub;

$videoclub = new Videoclub('VideoClub', 'Iturraspe 234');

$cliente =new Cliente('Andrea', 'Biasco', 2636664);

$pelicula =new Pelicula('Escapate si puedes','Ingles','2:30','Accion');

$alquiler->agregarCliente($cliente);
$alquiler->agregarProducto($pelicula);

$videoclub->agregarAlquiler($alquiler);

$alquiler->alquilar($cliente, $pelicula);

$clientes = $alquiler->getClientes();

echo '<p>Clientes:</p>';
foreach($clientes as $cliente)
{
	echo $cliente->getNombre().'<br />';
}

$productos = $alquiler->getProductos();
echo '<p>Productos:</p>';
foreach($productos as $producto)
{
	echo $producto->getNombre().'<br />';
}







