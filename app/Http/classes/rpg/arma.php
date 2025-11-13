<?php

namespace app\classes\rpg;

class Arma
{
    public $nome;
    public $dano;
    public $durabilidade;

    public function __construct($nome, $dano, $durabilidade)
    {
        $this->nome = $nome;
        $this->dano = $dano;
        $this->durabilidade = $durabilidade;
    }

    public function usar()
    {
        if ($this->durabilidade > 0) {
            $this->durabilidade--;
            return $this->dano;
        }

        // Se a arma estiver quebrada
        return 0;
    }

    public function reparar($valor)
    {
        $this->durabilidade += $valor;
    }
}

?>