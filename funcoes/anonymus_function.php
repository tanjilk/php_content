<div class="titulo">Anonymus Function</div>
<?php

    $soma = function($a, $b){
        return $a + $b;
    };

    $multiplicacao = function($a, $b){
        return $a * $b;
    };

    $divisao = function($a, $b){
        return $a / $b;
    };

    $subtracao = function($a, $b){
        return $a - $b;
    };

    function execute($a, $b, $op, $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    // echo $soma(1,2) . '<br>';
    execute(2,3, '*', $multiplicacao);
    execute(2,3, '+', $soma);
    execute(2,3, '-', $subtracao);
    execute(2,3, '/', $divisao);
?>