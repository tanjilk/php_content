<div class="titulo">Modificador Final</div>

<?php


abstract class Abstrata {

	abstract public function metodo1();
	
	final public function metodo2() {
		echo "Nao mudo!";
	}
}

class Classe extends Abstrata {
	public function metodo1(){
		echo "Executando metodo1<br>";
	}

}

$classe1 = new Classe();
$classe1->metodo1();
$classe1->metodo2();
echo "<br>";

final class Unica {
	public $att = "Valor Unico!";
}

$unica = new Unica();
echo $unica->att;