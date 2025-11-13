<?php
namespace app\classes\rpg;

class Jogador {
    public $nome;
    public $vida;
    public $ataque;
    public $defesa;
    public $arma;

    public function __construct($nome, $vida, $ataque, $defesa) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
    }

    public function equiparArma($arma) {
        $this->arma = $arma;
    }

    public function atacar() {
        $dano = $this->ataque;
        if ($this->arma) $dano += $this->arma->usar();
        return $dano;
    }

    public function defender($dano) {
        $danoFinal = max(0, $dano - $this->defesa);
        $this->vida -= $danoFinal;
        return $danoFinal;
    }

    public function estaVivo() {
        return $this->vida > 0;
    }
}

?>