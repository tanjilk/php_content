<div class="titulo">Visibilidade</div>


<?php

class A {

	public $publico = 'Público';
	protected $protegido = 'Protegido';
	private $privado = 'Privado';

	public function mostrarA(){
		$this->naoMostrar();
		echo '<br>';
		echo "class A) Publico = {$this->publico}<br>";
		echo "class A) Privado = {$this->privado}<br>";
		echo "class A) Protegido = {$this->protegido}<br";
		echo '<br>';
	}

	private function naoMostrar(){
		echo "Nao vou imprimir!";
	}

	protected function vaiPorHeranca(){
		echo 'Serei transmitido por heranca!<br>';
	}
}

class B extends A {
	public function mostrarB(){
		echo '<br>';
		echo "class B) Publico = {$this->publico}<br>";
		echo "class B) Privado = {$this->privado}<br>";
		echo "class B) Protegido = {$this->protegido}<br>";
		parent::vaiPorHeranca();
	}
}

$a = new A;
$b = new B;

$a->mostrarA();
echo '<br>';
echo 'CLASS B';
echo '<br>';
$b->mostrarB();