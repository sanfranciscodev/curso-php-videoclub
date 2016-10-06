<?php

include 'Videoclub.php';
include 'Cliente.php';
include 'Producto.php';
include 'Juego.php';
include 'CD.php';
include 'Pelicula.php';



// Videoclub
$videoClub01 = new Videoclub('La esquina videoclub');


// Clientes
$cliente01 = new Cliente('Juan Carlos');
$cliente02 = new Cliente('Gabriel');
$cliente03 = new Cliente('Nachi');


// Productos
$juego01 = new Juego('Half Life', 32.5, 'XBox', 'FPS');
$juego02 = new Juego('Day of the Tentacle', 22.0, 'XBox', 'Graphical Adventure');
$juego03 = new Juego('Counter Strike', 18.5, 'Playstation 4', 'FPS');
$CD01 = new CD('La mona, que se yo', 42.5, 63, 'Cuarteto');
$CD02 = new CD('Chayanne, recontra que se yo', 66.3, 55, 'Romántico');
$CD03 = new CD('Marama, cualquiera', 12.3, 54, 'Cumbia');
$pelicula01 = new Pelicula('Ben Hur', 22.3, 'Castellano', 124, 'Épico');
$pelicula02 = new Pelicula('Terminator 5', 32.5, 'Inglés', 130, 'Acción');
$pelicula03 = new Pelicula('El hombre que araña', 12.7, 'Inglés', 94, 'Comedia');


// nombre del videoclub
print('Videoclub:' . "\n");
print($videoClub01->getNombre()) . "\n";


// agregar productos a videoclub
$videoClub01->agregarProducto($juego01, 2);
$videoClub01->agregarProducto($juego02, 1);
$videoClub01->agregarProducto($juego03, 3);
$videoClub01->agregarProducto($CD01, 4);
$videoClub01->agregarProducto($CD02, 2);
$videoClub01->agregarProducto($CD03, 3);
$videoClub01->agregarProducto($pelicula01, 2);
$videoClub01->agregarProducto($pelicula02, 1);
$videoClub01->agregarProducto($pelicula03, 3);


// agregar clientes a videoclub
$videoClub01->agregarCliente($cliente01);
$videoClub01->agregarCliente($cliente02);
$videoClub01->agregarCliente($cliente03);


// productos en el videoclub
print('Productos:' . "\n");
for($i = 0; $i < count($videoClub01->nombresDeProductos()); $i++) {
    print($videoClub01->nombresDeProductos()[$i] . "\n");
}


// clientes en el videoclub
print('Clientes:' . "\n");
for($i = 0; $i < count($videoClub01->nombresDeClientes()); $i++) {
    print($videoClub01->nombresDeClientes()[$i] . "\n");
}


