<?php 

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use app\classes\rpg\jogador;
use app\classes\rpg\vilao;
use app\classes\rpg\arma;

class RPGController extends Controller
{
    public function simularCombate()
    {
        // Criar jogador e vilão
        $heroi = new jogador('Fulano', 200, 30, 10);
        $vilao = new Vilao('Orc Maligno', 150, 25, 5);

        // Equipar arma
        $espada = new Arma('Espada Lendária', 15, 5);
        $heroi->equiparArma($espada);

        // Simulação simples de combate
        while ($heroi->estaVivo() && $vilao->estaVivo()) {
            $danoVilao = $vilao->defender($heroi->atacar());
            $danoHeroi = $heroi->defender($vilao->atacar());
        }

        // Resultado
        $vencedor = $heroi->estaVivo() ? $heroi->nome : $vilao->nome;

        return view('simularCombate', [
            'vencedor' => $vencedor,
            'vida_heroi' => $heroi->vida,
            'vida_vilao' => $vilao->vida,
        ]);
    }
}

?>