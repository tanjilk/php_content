<div class="titulo">Array</div>

<?php
    $lista = array(1, 2, 3.4, "texto");
    //var_dump($lista);
    print_r($lista);
    echo '<br>' . $lista[0];
    echo '<br>' . $lista[1];
    echo '<br>' . $lista[2];
    echo '<br>' . $lista[3];
    echo '<br>';
    var_dump($lista[3000]);

    $texto = "Esse é um texto de teste";
    echo '<br>' . $texto[0];
    echo '<br>' . $texto[2];
    echo '<br>' . $texto[11];
    // echo '<br>' . mb_substr($texto, 1, 1);
?>