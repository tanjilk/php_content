<div class="titulo">Traits #02</div>

<?php

trait validar {
	public function validarString($str) {
		return isset($str) && $str != "";
	}
}

trait validarMelhor {
	public function validarString($str){
		return isset($str) && trim($str);
	}
}

class Utilizador {
	use validar, validarMelhor {
		validarMelhor::validarString insteadOf validar;
		validar::validarString as validarSimples;
	}
}

$utilizador = new Utilizador();
var_dump($utilizador->validarString(' '));
var_dump($utilizador->validarSimples(' '));
