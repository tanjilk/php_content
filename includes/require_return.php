<div class="titulo">Require & Return</div>

<?php
echo "Inicio" . '<br>';
$valorRetorno = require('return_used.php');
echo "$valorRetorno<br>";
// echo "{$variavelRetornada}<br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_notused.php');
//echo "$valorRetorno2<br>";

var_dump($valorRetorno2);
echo '<br>';
echo "$variavelDeclarada <br>";
echo 'Fim';