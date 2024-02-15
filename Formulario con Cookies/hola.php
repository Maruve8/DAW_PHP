<?php 
//Verifico que la cookie exista
if(isset($_COOKIE["Nombre"])) {
    $nombre = $_COOKIE["Nombre"];
} else {
    //Redirijo al formulario si no existe la cookie
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola PHP</title>
</head>
<body>
    <!--Saludo y opción eliminar cookie-->
    <p>Hola <?php echo $nombre; ?></p>
    <form action="eliminar_cookie.php" method="post">
        <input type="submit" value="Eliminar Cookie"/>
    </form>
</body>
</html>