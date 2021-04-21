<div class="titulo">Include Once</div>

<?php
ini_set('display_errors', 1);

include('include_once_fich.php');
// require('include_once_fich.php');
echo '<br>';
echo "{$variavel}" . '<br>';
$variavel = 'Variavel Alterada';
echo "{$variavel}" . '<br>';



include('include_once_fich.php');
echo "{$variavel}" . '<br>';
$variavel = "Variavel Alterada";
include_once('include_once_fich.php');
echo "{$variavel}" . '<br>';

require_once('include_once_fich.php');
echo "{$variavel}" . '<br>';

echo 'FIM!';