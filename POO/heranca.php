<div class="titulo">Herança</div>

<?php

class Pessoa {
	
	public $nome;
	public $idade;

	function __construct($nome, $idade){
		$this->nome = $nome;
		$this->idade = $idade;
		echo 'Pessoa Criada!<br>';
	}

	function __destruct(){
		echo 'Adeus!<br>';
	}

	public function apresentar(){
		echo "{$this->nome}, {$this->idade} anos";

	}
}


class Utilizador extends Pessoa {
	public $login;

	function __construct($nome, $idade, $login){
		parent::__construct($nome, $idade);
		$this->login = $login;
	}

	function __destruct(){
		echo 'Utilizador Destruido!<br>';
		parent::__destruct();
	}

	function apresentar(){
		echo "@{$this->login}: ";
		parent::apresentar();
		
	}



}

$pessoa1 = new Pessoa('Tanjil', 15);
$pessoa1->apresentar();
echo '<br>';

$utilizador1 = new Utilizador('Joaquim', 20, 'joaquim20');
$utilizador1->apresentar();
echo '<br>';

unset($utilizador1);
echo '<br>';