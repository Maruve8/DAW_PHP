<?php

class Equipo
{
    private $jugadores;

    public function __construct()
    {
        $this->jugadores = array();
    }

    public function addJug($jugador)
    {
        $this->jugadores[] = $jugador;
    }

    public function getJug($numJugador)
    {
        foreach ($this->jugadores as $jugador) {
            if ($jugador->getNumJug() == $numJugador) {
                return $jugador;
            }
        }
        return null; // Devuelve null si no se encuentra el jugador
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->jugadores as $jugador) {
            $total += $jugador->getPtos();
        }
        return $total;
    }
}
?>
