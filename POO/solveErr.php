<div class="titulo">7 Erros</div>

<?php

interface Template {
	function method1();
	public function method2($parametro);
}

abstract class ClasseAbstrata extends Template {
	public function metodo3(){
		echo "Estou a funcionar!";
	}
}

class Class implements ClasseAbstrata {
	function __construct($parametro){

	}
}

$exemplo = Classe();
$exemplo.metodo3();