<?php
declare (strict_types=1); //TIPADO PARA VERIFICAR QUE SE ESTE PONIENDO LOS TIPOS DE ARGUMENTOS QUE SON
 include 'includes/header.php';


// FUNCIONES PERMITEN REUTILIZAR CODIGO


function sumar(int $numero1 = 0, int $numero2 = 0 ){ //PARÁMETROS
    echo $numero1 + $numero2 ;
}
// PARÁMETROS POR DEFAULT: En caso que solo se ponga un ARGUMENTO, que el otro tome el valor DEFAULT

sumar(10 , 20); //ARGUMENTOS
//sumar(numero2: 1, numero1:2); //PARAMETROS NOMBRADOS da error en vs pero esta bien

include 'includes/footer.php';