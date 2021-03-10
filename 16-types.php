<?php 
declare(strict_types = 1); //TIPADO--- Estricto (MEJORA LA CALIDAD DEL CODIGO)
include 'includes/header.php';

// FUNCIONES que RETORNAN valores
// Recordando: PHP 7 introdujo los TYPES

function usuarioAutenticado (bool $autenticado): string{ //TIPADO--- Debe retornar un String ESTRICTAMENTE
    if($autenticado){
        return "El Usuario esta autenticado";
    } else {
        return "El Usuario NO esta autenticado";
    }
}
// Si al lado de (bool $autenticado): se pone void signfica que la función no retornará nada (imprimirá algo)
// De lo contrario al poner array, string, int: es para que RETORNE eso.
$usuario = usuarioAutenticado(true); //Aca se le da el argumento TRUE
echo $usuario;

echo "<br>";
// OTRA VARIACION ES------------------------------------
function usuarioAutenticado2 (bool $autenticado): ?string{ //TIPADO--- Debe retornar un String ESTRICTAMENTE
    if($autenticado){
        return "El Usuario 2 esta autenticado";
    } else {
        return null;
    }
}
// ?string singnifica Que puede ser OPCIONAL o que puede ser un STRING

// OTRA VARIACION: string|int significa UNION que puede retornar diferentes returns (string o entero)------
$usuario2 = usuarioAutenticado2(true);
echo $usuario2;




include 'includes/footer.php';
