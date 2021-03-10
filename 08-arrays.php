<?php include 'includes/header.php';
// var_dump con pre es util para revisar resultados de consulta de BD, o revisar arrays
// Los resultados de una consulta de BD estarán en un arreglo
// Cuando autenticamos un usuario, lo guardamos en un arreglo llamado sesion


// Arreglos indexados y asociativos son el CORAZON DE PHP, como objetos de JAVASCRIPT
// Arreglos indexados

 $carrito = ["Tablet", "Television", "Computadora"]; //1°forma--------------------------------------------------
 //SE USA MÁS EN LARAVEL

// UTIL PARA VER LOS CONTENIDOS DE UN ARRAY
 echo "<pre>";
    var_dump($carrito); //var_dump es mejor con los pre, var_dump($carrito[0])
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un elemento en el indice 3 del arreglo
$carrito [3] = "Nuevo producto agregado";

// Añadir un elemento nuevo al final
array_push($carrito, "Audifonos");

// Añadir al inicio
array_unshift($carrito, "Smartwatch");
echo "<pre>";
var_dump($carrito); 
echo "</pre>";


// 2° forma de crear arreglos----------------------------------------------------------------------------
// SE USA MAS EN WORDPRESS

$clientes = array("Cliente 1", "Cliente 2", "Cliente 3");
echo "<pre>";
var_dump($clientes); 
echo "</pre>";

echo $clientes[1];

include 'includes/footer.php';