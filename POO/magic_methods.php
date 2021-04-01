<div class="titulo">Metodos magicos</div>


<?php

class Pessoa {

	public $nome;
	public $idade;

	function __construct($nome, $idade){
		$this->nome = $nome;
		$this->idade = $idade;
	}

	function __destruct(){
		echo 'Destruct chamado';
	}

	public function __toString(){
		return "{$this->nome} tem {$this->idade} anos";
	}

	public function apresentar(){
		echo $this . "<br>";
	}

	public function __get($atrib){
		echo "Lendo atributo nao declarado: {$atrib}<br>";
		return $atrib;
	}

	public function __set($atrib, $valor){
		echo "Alterando o atributo nao declarado: {$atrib}/{$valor}";
	}

	public function __call($metodo, $params){
		echo "Tentando executar metodo {$metodo}.";
		echo "<br>com os paramentros: ";
		print_r($params);
	}
}


$pessoa = new Pessoa('Joaquim', 20);
/*$pessoa->apresentar();
echo '<br>';
echo $pessoa, '<br>';
*/
/*
$pessoa->nome = "Jose";


$pessoa->nomeCompleto;
$pessoa->nomeCompleto = "JOAO";
echo '<br>';
$pessoa->nomeCompleto;
echo $pessoa->nome;
*/

$pessoa->apresentar(); // __toString();
$pessoa->nomeCompleto = "JOAO"; // __set();
echo '<br>';
$pessoa->nomeCompleto; // __get();
$pessoa->exec(1, 'teste', true, [1,2,3]); // __call();
echo '<br>';
$pessoa = null; // __destruct();