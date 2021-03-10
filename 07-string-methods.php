<?php include 'includes/header.php';

$nombreCliente = "Juan Pablo";

// Conocer extension de un string
echo strlen($nombreCliente); //Permite CONOCER EXTENSION DE UN STRING
var_dump($nombreCliente); //Esto también

// Eliminar espacios en blanco
$texto = trim($nombreCliente); //Eliminar espacios en blanco
echo strlen($texto); //Muestra que efectiva/ 10 caracteres

// Convertirlo a Mayusculas (SE PUEDE HACER CON CSS)
echo strtoupper($nombreCliente);

// Convertirlo en Minúsculas (")
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

// La idea es que en los correos no se afecte si hay mayusculas

var_dump(strtolower($mail1) === strtolower($mail2)); //De esta forma YA SON IGUALES

// Supongamos que le quiero reemplazar una letra/palabra al nombre
echo str_replace("Juan", "J", $nombreCliente); //Reemplaza Juan por J

// Revisar si una letra/palabra existe o no dentro de un STRING
echo strpos($nombreCliente, "Juan"); //Manda la pos 0


// Concatenar en PHP
$tipoCliente = "Premium";
echo "<br>";
echo "El Cliente ". $nombreCliente . " es " . $tipoCliente; //MAS RECOMENDADO

echo "El Cliente {$nombreCliente} es {$tipoCliente} "; //Solo funciona con "


include 'includes/footer.php';