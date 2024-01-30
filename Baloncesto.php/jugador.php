<?php

class Jugador
{
    private $numeroJug;
    private $ptos;

    public function __construct($numeroJug)
    {
        $this->numeroJug = $numeroJug;
        $this->ptos = 0;
    }

    public function getNumJug()
    {
        return $this->numeroJug;
    }

    public function getPtos()
    {
        return $this->ptos;
    }

    public function addPtos($ptos)
    {
        if ($ptos > 0) {
            $this->ptos += $ptos;
        }
    }
}
?>
