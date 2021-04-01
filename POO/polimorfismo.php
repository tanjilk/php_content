<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida {

	public $peso;
}

class Arroz extends Comida {

}

class ArrozBranco extends Arroz{

}

class Carne extends Comida {

}

class Pessoa {
	public $peso;

	function __construct($peso){
		$this->peso = $peso;
	}

	public function comer($comida){
		$this->peso += $comida->peso;
	}
}

$c = new Arroz();
$c->peso = 0.45;

$c_f = new ArrozBranco();
$c_f->peso = 0.60;

$c_carne = new Carne();
$c_carne->peso = 1;

$p = new Pessoa(57.30);
$p->comer($c);
$p->comer($c_f);
$p->comer($c_carne);

echo $p->peso;