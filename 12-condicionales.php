<?php include 'includes/header.php';

$autenticado = true;
$admin = true;

if($autenticado && $admin){
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, inicia sesión.";
}


//If anidados...
$cliente = [
    "nombre" => "Juan",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "Premium",
    ]
];
echo "<br>";
if (!empty($cliente)) { //CONSULTAS UTILES EN BD
    echo "El arreglo de Cliente NO está vacío";

    if($cliente["saldo"] > 0){ //cliente.saldo
        echo "El Cliente tiene Saldo disponible";
    } else {
        echo "No hay saldo";
    }
} 
echo "<br>";

// Else if
if($cliente["saldo"] > 0){
    echo "El Cliente tiene saldo";
} else if($cliente["informacion"]["tipo"] === "Premiam") {
    echo "El Cliente es Premium";
} else {
    echo "No hay cliente definido o no tiene saldo o no es premium";
}
echo "<br>";

// Switch
$tecnologia = "HTML";

switch($tecnologia) {
    case "PHP":
        echo "PHP, un excelente lenguaje!";
        break;
    case "JavaScript":
        echo "Genial, el lenguaje de la web";
        break;
    case "HTML":
        echo "Emmm....";
        break;
    default:
        echo "Tecnología diferente";
        break;
}




include 'includes/footer.php';