<div class="titulo">Operações</div>

<?php

    $dados1 = [
        "nome" => "Joao",
        "idade" => 28
    ];

    $dados2 = [
        "nacionalidade" => "espanhol"
    ];

    $dados1["endereco"] = "Rua A";
    $dadoscompletos = $dados1 + $dados2;
    $indice_rand = array_rand($dadoscompletos);
    print_r($dadoscompletos);
    echo '<br>';
    echo "$indice_rand = $dadoscompletos[$indice_rand]";
    echo '<br>';
    echo $dadoscompletos['idade'];
    echo '<br>';
    echo "${dadoscompletos['idade']}";

    unset($dadoscompletos["nome"]);
    echo '<br>';
    print_r($dadoscompletos);

    unset($dadoscompletos);
    echo'<br'>
    var_dump($dadoscompletos);

    $impares = [1, 3, 5, 7, 9];
    $pares = [0, 2, 4, 6, 8];

    $decimais = $pares + $impares;
    echo '<br>';
    print_r($decimais);

    $decimais = array_merge($pares, $impares);
    echo '<br>';
    print_r($decimais);
    
    sort($decimais);
    echo '<br>';
    print_r($decimais);



?>