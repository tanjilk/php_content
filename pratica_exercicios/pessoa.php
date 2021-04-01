<div class="titulo">Pessoa</div>

<?php

abstract class Comida {

	public $peso;

}



class Carne extends Comida {
	public $vegan = 0;
	public $peso = 0.40;
}

class Batatas extends Comida {
	public $vegan = 1;
	public $peso = 0.95;
}

class Arroz extends Comida {
	public $vegan = 1;
	public $peso = 0.20;
}


class Pessoa {
	
	public $nome;
	public $ultimo_nome;
	public $idade;
	public $peso;

	public function __construct($nome, $ultimo_nome, $idade, $peso){
		$this->nome = $nome;
		$this->ultimo_nome = $ultimo_nome;
		$this->$idade = $idade;
		$this->peso = $peso;
	}
	
	public function __destruct(){
		echo 'clear';
	}
	
	public function __toString(){
		return "{$this->nome} {$this->ultimo_nome}, tem {$this->idade} anos e pesa {$this->peso}";
	}
	
	public function apresentar(){
		echo $this . '<br>';
	}

	public function __get($atrib){
		return $atrib;
	}

	public function __call($metodo, $params){
		echo "Chamando o metodo {$metodo} com os seguintes paramentros<br>";
		print_r($params);
	}

	public function comer($comida){
		$this->peso = $this->peso + $comida->peso;
	}
	
	

}



class PessoaVeg extends Pessoa {
	
	public function comer($comida){
		if($comida->$vegan == 1){
			$this->peso = $this->peso + $comida->peso;
		} else {
			echo "Tu es vegan, isso n é pa ti";
		}
	}

	

}

echo 'teste' . '<br>';

$p_vegan = new PessoaVeg("Joaquim", "Mares", 24, 55.20, 1);
$p_vegan->apresentar();

echo 'teste';