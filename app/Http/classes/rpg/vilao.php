<?php

namespace app\classes\rpg;

class Vilao
{
    public $nome;
    public $vida;
    public $ataque;
    public $defesa;

    public function __construct($nome, $vida, $ataque, $defesa)
    {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
    }

    public function atacar()
    {
        return $this->ataque;
    }

    public function defender($dano)
    {
        $danoRecebido = max(0, $dano - $this->defesa);
        $this->vida -= $danoRecebido;
        return $danoRecebido;
    }

    public function estaVivo()
    {
        return $this->vida > 0;
    }
}

?>