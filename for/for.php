<div class="titulo">Ciclo For</div>

<?php

    for($count = 1; $cont <= 5; $cont++){
        echo "$cont <br>";
    }

    echo "<hr>";

    for(;$cont <= 10; $cont++){
        echo "$cont <br>";
    }

    $array = ['Domingo', 'Segunda', 'Terca', 'Quarta',
    'Quinta', 'Sexta', 'Sabado'];

    print_r($array);
    echo '<hr>';
    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]} <br>";
    }

    $matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];
    echo '<hr>';
    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){
            echo "{$matrix[$i][$j]} ";
        }
        echo "<br>";
    }
?>