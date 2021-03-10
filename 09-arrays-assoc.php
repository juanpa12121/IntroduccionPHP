<?php include 'includes/header.php';
// Arreglos asociativos son el equivalente a OBJETOS en JAVASCRIPT

// $cliente = array();


$cliente = [
    "nombre" => "Juan", //SINTAXIS DE JS ERA: "nombre" : Juan
    'saldo' => 200,
    'informacion' => [ //Tiene otro array
        'tipo' => "Premium",
        'disponible' => 100
    ]
];
function debug($valor){
echo "<pre>";
var_dump($valor); 
echo "</pre>";
}

foreach ($cliente as $key => $value) {
    debug($cliente);
}

// Acceder a los elementos del array
echo $cliente["nombre"];
echo $cliente["saldo"];
echo $cliente["informacion"]["tipo"]; //Acceder a un elemento de array dentro de array clientes
echo $cliente["informacion"]["disponible"]; 

// Para mirar la estructura y especificaciones de un array
echo "<pre>";
var_dump($cliente); 
echo "</pre>";

// Para mirar caracteristicas y especificaciones de un elemento del array
echo "<pre>";
var_dump($cliente["nombre"]); 
echo "</pre>";

$cliente["codigo"] = 151515; //No definida en el array pero la agrega igual  JAVASCRIPT
echo "<pre>";
var_dump($cliente);  //Muestra la estructura y caract del array 
echo "</pre>";

echo "<pre>";
var_dump($cliente["codigo"]);  //Muestra especificaciones del elemento delarray en especifico
echo "</pre>";

// Es importante entender esto, porque al hacer consulta de BD, y las llaves van a ser
// LAS COLUMNAS DE SQL







include 'includes/footer.php';