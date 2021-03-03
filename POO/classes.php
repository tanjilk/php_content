<div class="titulo">Primeira Classe</div>

<?php

    class Cliente {
        
        public $nome = 'Anônimo';
        public $idade = 18;

        public function apresentar(){
            echo "Nome: {$this->nome}<br>";
        }
    }

    $c1 = new Cliente();
    $c1 -> nome = 'Joao';
    $c1->apresentar();

    $c2 = new Cliente;
    $c2->nome = 'Joaquim';
    $c2->idade = 34;
    $c2->apresentar();

?>