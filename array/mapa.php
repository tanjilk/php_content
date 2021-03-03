<div class="titulo">Mapa Array</div>

<?php
  
    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    // print_r($dados)
    var_dump($dados);
    echo '<br>';
    echo $dados["idade"];
    echo '<br>' . $dados["cor"];
    echo '<br>' . $dados["peso"];

    $dados[] = 'i';
    $dados['vinte'] = 'j';
    echo '<br>';
    print_r($dados);

?>