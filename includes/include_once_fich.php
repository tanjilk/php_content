<?php

echo 'Carregando o ficheiro: include_once_fich.php';

$variavel = "definida";

if(!function_exists('soma')){
	function soma($a, $b){
		return $a+$b;
	}	
}
