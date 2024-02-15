<?php
//Eliminar cookies
setcookie("Nombre", "", time()-3600, "/");

//Redirijo al formulario
header("Location: index.php");
exit;
?>