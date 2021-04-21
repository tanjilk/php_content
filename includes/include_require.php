<div class="titulo">Include vs Require</div>

<?php

echo 'Usando include com um ficheiro inexistente...' . '<br>';

ini_set('display_errors', 1);
include('ficheiro_inexistente.php');

echo 'Usando require com um ficheiro inexistente...' . '<br>';
require('ficheiro_inexistente.php');

echo "BRO MOMENTO... <br>";