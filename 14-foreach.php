<?php include 'includes/header.php';
// Ejemplo más real de foreach

// Spongamos una BD productos, cada array sera un producto(array) asociativo
$productos = [
    [
        "nombre" => "Tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => 'Television 24"',
        "precio" => 300,
        "disponible" => true
    ],
    [
        "nombre" => "Monitor Curvo",
        "precio" => 400,
        "disponible" => false
    ]
];

// foreach($productos as $producto ) {
//     // echo "<pre>";
//     //     var_dump($producto); //Para conocer mas info sobre una variable
//     // echo "</pre>";

//     echo "<li>"; //NO SE RECOMIENDA CARGAR A PHP PARA CREAR HTML, es dcir HTML EN PHP
//         echo "Titulo producto";
//     echo "</li>";
// }

// SE RECOMIENDA ES PHP EN HTML-----------------
foreach($productos as $producto ) { ?>
    <li>
        <p>Producto: <?php echo $producto["nombre"]; ?> </p>
        <p>Precio: <?php echo "$" . $producto["precio"]; ?> </p>
        <p><?php echo ($producto["disponible"] ? "Disponible" : "No Disponible" ) ?> </p> <!--Operador ternario-->
    </li>
    <?php 
        //ESTO ES LO MISMO QUE LA CONDICION DEL OPERADOR TERNARIO
        // if($producto["disponible"]){
        //     echo "<p>Disponible</p>";
        // } else {
        //     echo "<p>No Disponible</p>";
        // }  
}
include 'includes/footer.php';