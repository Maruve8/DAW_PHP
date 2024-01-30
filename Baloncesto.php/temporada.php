<?php

// Incluimos las clases
include 'Jugador.php';
include 'Equipo.php';

// Creamos un equipo
$equipo = new Equipo();

// Creamos 9 jugadores y los añadimos al equipo
for ($i = 1; $i <= 9; $i++) {
    $jugador = new Jugador($i);
    $ptosAleatorios = rand(20, 100);
    $jugador->addPtos($ptosAleatorios);
    $equipo->addJug($jugador);
}

// Mostramos la puntuación total del equipo
echo "Puntuación total del equipo: " . $equipo->getTotal();
?>
