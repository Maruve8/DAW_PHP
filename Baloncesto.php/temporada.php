<?php

// Incluyo las clases
include 'Jugador.php';
include 'Equipo.php';

// Creo un equipo
$equipo = new Equipo();

// Creo 9 jugadores y lo añado al equipo
for ($i = 1; $i <= 9; $i++) {
    $jugador = new Jugador($i);
    $ptosAleatorios = rand(20, 100);
    $jugador->addPtos($ptosAleatorios);
    $equipo->addJug($jugador);
}

// Se muestra la puntuación total del equipo
echo "Puntuación total del equipo: " . $equipo->getTotal();
?>
