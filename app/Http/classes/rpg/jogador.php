<?php
namespace app\Http\classes\rpg;

use App\Http\classes\RPG\Personagens;

class Jogador extends Personagens{
    private int $experiencia;
    public function __construct(string $nome, int $vida, int $ataque, int $defesa)
    {        parent::__construct( $nome,$vida, $ataque);

        $this->experiencia =0;
    }

    public function atacar(): string{
        $dano=$this->ataque*2;
        return "{this->nome} atacou e causou {$dano} de dano";
    }

    public function ganharExperiencia(int $experiencia): string{
        $this->experiencia += $experiencia;
        return "{$this->$nome} ganhou {$experiencia} de experiencia";
    }


}




?>