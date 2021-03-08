<div class="titulo">Solving Errors OOP</div>

<?php

interface Template {
	function method1();
	public function method2($parametro);
}

abstract class ClasseAbstrata implements Template {
	public function method1(){
		echo "un grand bro momento";
	}

	public function method2($parametro){
		echo "Un grand $parametro";
	}
	public function metodo3(){
		echo "Estou a funcionar CRL!";
	}
}

class Classe extends ClasseAbstrata {
	function __construct($parametro){
		$this->parametro = $parametro;
	}
}

$exemplo = new Classe('BRO MOMENTO');
$exemplo->method1();
echo '<br>';

$exemplo->method2('BRO MOMENTOO');
echo '<br>';

$exemplo->metodo3();
echo '<br>';

echo "Fim!";
