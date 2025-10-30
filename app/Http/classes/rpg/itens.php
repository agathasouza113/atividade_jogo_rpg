<?php
    namespace App\Http\classes\RPG;

abstract class itens {
    private string $nome_item;
    private float $peso;

    public function __construct(string $nome_item, float $peso)
    {
        $this->nome_item = $nome_item;
        $this->peso = $peso;        
    }
    
    abstract public function usar():string;

    public function getItem():string{
        return $this->nome_item;  
    }

}
?>