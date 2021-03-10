<?php include 'includes/header.php';

// Buscar elementos en un array

// in_array - Buscar elementos en un array(SI EXISTE O NO)
$carrito = ["Tablet", "Computadora", "Television"];

// Se usar var_dump porque entrega mas información
var_dump(in_array("Tablet", $carrito)); //Buscar Tablet en $carrito; TRUE
var_dump(in_array("Audifonos", $carrito)); //Buscar Tablet en $carrito; TRUE

// Ordenar elementos de un array INDEXADO
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); //Ordenar DE MENOR A MAYOR
rsort($numeros); //Ordenar de MAYOR A MENOR

echo "<pre>";
    var_dump($numeros);
echo "</pre>";

// Ordenar elementos DE un array ASOCIATIVO----------------
$cliente = array (  //$cliente = []
    "saldo" => 200,
    "tipo" => "Premium",
    "nombre" => "Juan"
);
echo "<pre>";
    var_dump($cliente);
echo "</pre>";

asort($cliente); //Ordena por VALORES alfabetica/ (PERO PRIMERO MUESTRA NUMEROS)
arsort($cliente); //Ordena por VALORES alfabetica/ DESC (PERO PRIMERO MUESTRA LETRAS)
ksort($cliente); //Ordena por LLAVES alfabetica/
krsort($cliente); //Ordena por LLAVES alfabetica/ DESC (DE LA Z A LA A)

echo "<pre>";
    var_dump($cliente);
echo "</pre>";
 




include 'includes/footer.php';