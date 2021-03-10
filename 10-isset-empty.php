<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array("Pedro", "Juan", "Karen");
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200
];

// Recuerde: var_dump: para revisar

// Empty: Revisa si array esta VACÍO o no
var_dump(empty($clientes)); //TRUE porque esta VACÍO
var_dump(empty($clientes3)); //FALSE porque NO está VACÍO
var_dump(empty($clientes2)); //TRUE porque esta VACÍO


// Isset: Revisa si un array esta CREADO o una propiedad está DEFINIDA
echo "<br>";
var_dump(isset($clientes4)); //FALSE porque $clientes4 no definido
var_dump(isset($clientes)); //TRUE porque $clientes si está definido
var_dump(isset($clientes2)); //"
var_dump(isset($clientes3)); //"

// Isset también revisa si una propiedad está DEFINIDA en un array ASOCIATIVO
var_dump(isset($cliente["nombre"])); //TRUE porque "nombre" existe en cliente[]
var_dump(isset($cliente["codigo"])); //FALSE porque "codigo" NO existe en cliente[]

// También Isset util para ARRAYS INDEXADOS
var_dump(isset($clientes3[0])); //TRUE porque indice 0 existe en $clientes3

// ES IMPORTANTE PORQUE CUANDO SE HAGA CONSULTA A UNA BD, CUANDO ENVIEMOS DATOS A UN FORMULARIO
// TODO SE ALMACENA EN UN ARRAY Y SON MUY USADOS, ESTAS FUNCIONES PERMITIRÁN REVISAR SI 
// CIERTA INFO EXISTE EN UN ARRAY ANTES DE RECORRER LOS RESULTADOS DE UNA CONSULTA DE BD





include 'includes/footer.php';