<div class="titulo">Interface</div>

<?php

interface Animal {
	public function respirar();
}

interface Mamifero {
	function mamar();
}

interface Canino extends Animal, Mamifero {
	public function latir(): string;
	function correr();
}

interface Felino {
	function correr();
}

class Cao implements Canino {
	
	function respirar(){
		return "Respirando pelo ar";
	}

	function latir(): string {
		return 'au au';
	}

	function mamar(){
		return 'Leite!';
	}

	function correr(){
		return 'vrun';
	}

}

$animal1 = new Cao();
echo $animal1->respirar();
echo '<br>';

echo $animal1->latir();
echo '<br>';

echo $animal1->mamar();
echo '<br>';

echo $animal1->correr();
echo '<br>';

var_dump($animal1);
echo '<br>';
var_dump($animal1 instanceof Cao);
var_dump($animal1 instanceof Animal);
var_dump($animal1 instanceof Canino);
var_dump($animal1 instanceof Mamifero);