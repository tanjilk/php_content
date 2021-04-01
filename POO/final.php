<div class="titulo">Final</div>

<?php

abstract class Abstrata {
	abstract public function metodo1();

	final public function metodo2(){
		echo "N vou mudar<br>";
	}
}

class Classe extends Abstrata {
	public function metodo1(){
		echo "Metodo 1";
	}

}

$classe1 = new Classe();
$classe1->metodo1();

// Nao consegue accessar metodo2
//$classe2->metodo2();

final class Unica {
	public $att = "teste";
}

$unica = new Unica();
echo $unica->att;


/*
// Nao consegue fazer heranca de um final class
class Duplicate extends Unica {
	public $att2;
}*/