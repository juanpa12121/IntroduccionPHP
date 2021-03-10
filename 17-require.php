<?php include 'includes/header.php'; //SI se incluye un archivo inexistente da ERROR
// Otra forma de agregar un archivo externo es con "require" es igual al "include"


// ¿Cómo llamar una función que está en un archivo externo donde estan las funciones?

require "funciones.php";

iniciarApp();


include 'includes/footer.php';


// Utilizar require cuando se tengan FUNCIONES CRÍTICAS (Funcion conexion bases datos)
//Es estricto, si algo falla detiene la ejecución y vista de la página

// Utilizar include cuando se desee incluir otros templates
// Include: Aunque no encuentre el archivo se continuará ejecutando


// Require_once: Igual a require pero primero REVISA si el archivo fue incluido
// Si fue incluido ignora la linea de código, si no fue incluido lo incluirá