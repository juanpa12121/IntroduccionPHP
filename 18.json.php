<?php include 'includes/header.php';

// Spongamos una BD productos, cada array sera un producto(array) asociativo
$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => 'Televisión 24"',
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor Curvo",
        "precio" => 400,
        "disponible" => false
    ]
];

echo "<pre>";
var_dump($productos);
echo "</pre>";

echo "<br>";

// Hay que convertir el arreglo a JSON para que JS lo pueda leer
// JSON_UNESCAPED_UNICODE Para que agarre los acentos (tildes)
$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //Función que convertirla el ARRAY en STRING (para leerlo en JS)

// Y Ahora para convertir un String a Arreglo (Para manipular en PHP)
$json_array = json_decode($json);

echo "<pre>";
var_dump($json);
echo "</pre>";

echo "<pre>";
var_dump($json_array);
echo "</pre>";



include 'includes/footer.php';

// JSON ES MUY IMPORTANTE EN PHP
// Para comunicar/conectar aplicación (base de datos y consultas) con otras plataformas
// Como JS, Vue.js, React, App movil Android, iOs. Esta conexión se logra por medio de JSON

// Los objetos en javascript son equivalentes  alos arrays asociativos de PHP
// JS y PHP se pueden comunicar opr medio de JSON