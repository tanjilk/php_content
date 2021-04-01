<div class="titulo">Traits #01</div>

<?php

trait validacao {
	public function validarString($str){
		return isset($str) && $str !== ''; 
	}

	public $a = 'A';
}

trait validacao_1 {
	public $b = 'B';
	private $c = 'C';
	public function validarStringE($str){
		return isset($str) && trim($str);
	}
}

class Utilizador {
	use validacao, validacao_1;
	
	public function mostrarC(){
		return $this->c;
	}
}

$utilizador = new Utilizador();
var_dump($utilizador->validarString(' '));
var_dump($utilizador->validarStringE(' '));
echo $utilizador->mostrarC();
echo 'Fim!';