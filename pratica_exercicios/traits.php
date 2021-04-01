<div class="titulo">Traits</div>

<?php

trait validacao {
	public function validarString($str){
		return isset($str) && $str !== "";
	}
}


trait validacaoMelhor {

	public $nome;
	private $ultimo_nome = "Manel";

	public function validarStringMelhor($str){
		return isset($str) && trim($str);
	}
}


class Utilizador {
	use validacao, validacaoMelhor;

	public function mostrarUltimoNome(){
		echo $this->ultimo_nome;
	}
}

$ut = new Utilizador();
$ut->nome = "Joaquim";
echo $ut->nome;
echo '<br>';
echo $ut->mostrarUltimoNome();
echo '<br>';
echo 'Fim';