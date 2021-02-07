<div class="titulo">Multidimensional</div>

<?php
    $dados = [
        [
            "nome" => "Joao",
            "idade" => 26,
            "cidade" => "Porto"
        ],
        [
            "nome" => "Jose",
            "idade" => 25,
            "cidade" => "Lisboa"
        ],
    ];

    print_r($dados);
    echo '<br>' . $dados[0]['idade'];
    echo '<br>' . $dados[1]['idade'];

    $dados[] = [
        "nome" => "Joaquim",
        "idade" => 60,
        "cidade" => "Alentejo", 
    ];
    
    $dados[2]["morada"] = "rua de chaves";
    echo '<br>';
    print_r($dados[2]);


