<div class="titulo">Include Funcao</div>

<?php

echo "Carregando o ficheiro: include_function.php" . '<br>';

function carregar_ficheiro(){
	include('include_archive.php');

	echo $variavel . '<br>';
	echo soma(5,6) . '<br>';
}

echo 'No ficheiro include_function again' . '<br>';
// echo soma(2,5) . '<br>';
echo carregar_ficheiro();

echo "{$variavel}";
var_dump($variavel);

echo '<br>' . soma(3,5);
echo "FIM!";