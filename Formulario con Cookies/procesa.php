<?php
// Si es POST, asigno el nombre a la variable $nombre
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $nombre = $_POST["nombre"];

    //Creo y guardo la cookie durante 1 hora
    setcookie("Nombre", $nombre, time()+3600, "/");

    //Redirijo a "hola nombreintroducidoporelusuario" 
    header("Location: hola.php");
    exit;
} 

//Si no, redirijo al formulario de nuevo
else {
    header("Location: index.php");
    exit;
}


?>