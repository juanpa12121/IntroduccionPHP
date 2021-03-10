<?php include 'includes/header.php';
// Una variable se define con signo $ al principio

//let nombre = "Juan" JAVASCRIPT
$nombre = "Juan";
//$99usuarios = 99; //ERROR NO INICIAR CON NUMEROS
$usuarios99 = 99; //CORRECTO

var_dump($nombre);
$_nombre = "Juan";
$nombre_ = "Juan";

// En PHP se ueden reasignar variables
$nombre = "Juan 2";
echo $nombre;

// Ahora usaremos esta sintaxis (MAS USADA)
define('constante', "Es el valor de la constante"); //Definir identificadores
echo constante;

// Otra sintaxis similar a JS (MENOS USADA)
const constante2 = "Hola2";
echo constante2;

// Se pueden crear vbles de 2 palabras igual a JS
$nombreCliente = "Pedro"; //Mas usada
$nombre_cliente = "Pedro";

include 'includes/footer.php';