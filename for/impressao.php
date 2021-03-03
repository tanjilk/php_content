<div class="titulo">Desafio Impressao</div>

<?php

/* Enunciado:
    - Imprima apenas os valores do array que contèm indice par
    - Resolver com for e foreach
    - Valores esperados: AAA, CCC, EEE
*/

$array = [
    "AAA", // 0
    "BBB", // 1
    "CCC", // 2
    "DDD", // 3
    "EEE", // 4
    "FFF" // 5
];

foreach ($array as $indice => $value) {
    //echo "$indice $value <br>";
    if($array[$indice] === "AAA"){
        echo "AAA <br>";
    }
    if($array[$indice] === "CCC"){
        echo "CCC <br>";
    }
    if($array[$indice] === "EEE"){
        echo "EEE <br>";
    }
}

echo '<hr>';

for($i = 0; $i < count($array); $i++){
    if($i % 2 === 1){
        continue;
    } else {
        echo $array[$i] . "<br>";
    }
    
}

?>