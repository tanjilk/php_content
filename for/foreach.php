<div class="titulo">Foreach</div>

<?php

$array = [
    'Domingo', 'Segunda', 'Terca', 'Quarta', 'Quinta', 'Sexta', 'Sabado'
];



foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['a', 'b', 'c', 'd']
];

foreach($matrix as $linha){
    // echo "$linha <br>";
    foreach($linha as $valor){
        echo "$valor ";
    }
    echo "<br>";
    
}
echo "<hr>";

$numeros = [1,2,3,3,4,5];
foreach($numeros as &$dobrar){
    $dobrar = $dobrar * 2;
    echo "$dobrar <br>";
}


?>