<div class="titulo">Função Retorno</div>

<?php

function soma($a){
    return function($b) use ($a){
        return $a+$b;
    };
}

echo soma(3)(3) . '<br>';

$num = 10;
$doisMais = soma(2)($num);
echo $doisMais;