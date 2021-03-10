<?php include 'includes/header.php';
// Cuando se consulta en BD, los resultados vienen en arreglo que se deben consultar con LOOPS

// While (revisa la condicion y luego ejecuta el codigo)---------------------------------------------------
$i = 0; //Incremento (inicializador)

while ($i < 10) {
    echo $i . "<br>";
    $i++; //Incremento
}

// Otra forma
// while($i < 10):
//     echo $i . "<br>";
//     $i++; //Incremento
// endwhile;

echo "<br>";

// Do While (primero ejecuta el codigo(minimo 1 vez) y luego evalua (revisa la condicion))--------------------
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

echo "<br>";

// For Loop: Mas corto igual al While----------------------------------------------------------------------
for ($i = 0; $i <= 10; $i++) {
    echo $i . "<br>";
};

// for($i = 0; $i <= 10; $i++):
//     echo $i . "<br>";
// endfor;

/*
Si el numero actual se puede dividir entre 3, imprima Fizz
Si el numero actual se puede dividir entre 5, imprima Buzz
3 y 5 imprimir FIZZ BUZZ
*/

// for($i = 1; $i <= 1000; $i++){
//     if(($i % 3 == 0) && ($i % 5 == 0)){
//         echo $i . " - FIZZ BUZZ <br>";
//     }
//     else if($i % 3 == 0){
//         echo $i . " - Fizz <br>";
//     } 
//     else if($i % 5 == 0){
//         echo $i . " - Buzz <br>";
//     }
//     else{
//         echo $i  ."<br>";
//     }
// };
// El orden importa, si se pone primero la condicion ($i % 5 == 0) y encuentra un numero que cumpla
// ($i % 3 == 0) && ($i % 5 == 0), IMPRIMIRÁ Buzz NO FizzBuzz 

echo "<br>";

// For Each Loop (Diseñado para recorrer arreglos)------------------------------------------------------------------------
$clientes = array("Pedro", "Juan", "Karen"); //array INDEXADO------------

foreach ($clientes as $cliente) {   //de 2° normal/ se crea una varibale que se llame igual en SINGULAR
    echo $cliente . "<br>";
} //tambien puede usarse : y endforeach
// echo count($clientes); //Extension del array
// echo sizeof($clientes); //Extension del array

echo "<br>";
for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br>";
}
// Foreach no hay que pasarle la extension, y no hay que ponerle [$i]
echo "<br>";

// FOREACH para ARRAY ASOCIATIVO, se itera el ALIAS sobre los VALORES no las llaves
$cliente = [  //array ASOCIATIVO-------------
    "nombre" => "Juan",
    "saldo" => 200,
    "tipo" => "Premium"
];

// Para iterar sobre los valores----
foreach ($cliente as $valor):
    echo $valor . "<br>";
endforeach;
echo "<br>";

// Para iterar sobre las llaves-----
foreach ( $cliente as $key => $valor ):
    echo $key . ": " . $valor . "<br/>";
endforeach;

// Las llaves de un arreglo indexado son los indices
// En que casos es útil conocer solo las llaves de un array ASOCIATIVO?
// R/ Cuando hagamos una consulta a una BD, para traer la columna de ese registro  sobre el que se esta iterando
// USOS: *Tienda virtual revisar si articulo tiene descuento, y así ponerle una etiqueta 
// * Panel de administracion: Para cuando el usuario es admin mostrarle opciones mas avanzadas
include 'includes/footer.php';
