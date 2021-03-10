<div class="titulo">Static</div>

<?php

class A {
	public $nao_static = 'Variavel de instancia';
	public static $sim_static = 'Variavel de classe (estatica)';

	public function mostrarA(){

		echo "Não estático = {$this->nao_static}<br>";
		echo "Estático = " . self::$sim_static . "<br>";
	}

	public static function mostrarStaticA(){
		echo "Estático = " . self::$sim_static . "<br>";
	}
}

$objetoA = new A();
$objetoA->mostrarA();
echo '<br>';

echo A::$sim_static;
A::$sim_static = 'Alterado';
echo '<br>';
A::mostrarStaticA();