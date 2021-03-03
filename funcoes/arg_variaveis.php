<div class="titulo">Argumento - Variaveis</div>

<?php

    function soma($a, $b){
        return $a + $b;
    }
    
    function somaCompleta(...$numeros){
        $soma = 0;
        foreach($numeros as $num){
            $soma += $num;
        }
        return $soma;
    }


    echo soma(4, 5) . '<br>';
    echo soma(6, 5) . '<br>';
    echo somaCompleta(1, 2, 3, 4, 5) . '<br>';
    $array_num = [
        2, 4, 6
    ];
    
    echo somaCompleta(...$array_num) . '<br>';
?>