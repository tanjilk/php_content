<?php

echo 'Carregando o ficheiro: include_archive<br>';

$variavel = 'Estou definida';

if(!function_exists('soma')){
	function soma($a, $b){
		return $a + $b;
	}
}