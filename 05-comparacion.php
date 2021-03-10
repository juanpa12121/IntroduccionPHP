<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2); //Da false
echo "<br>";

var_dump($numero1 < $numero2); //Da true
echo "<br>";

var_dump($numero1 >= $numero2); //Da false
echo "<br>";

var_dump($numero1 <= $numero2); //Da true
echo "<br>";

var_dump($numero2 == $numero3); //Da true
echo "<br>";

var_dump($numero2 == $numero4); //Da true $numero4 es String
echo "<br>";

var_dump($numero2 === $numero4); //=== operador que revisa el valor y tipo de dato (ESTRICTO)
echo "<br>";

var_dump($numero1 <=> $numero2); //Da -1, porque izq < der; 0 si son iguales; 1 si izq > der
echo "<br>";

var_dump($numero2 <=> $numero3); //Da 0
echo "<br>";

var_dump($numero2 <=> $numero1); //Da 1
echo "<br>";





include 'includes/footer.php';