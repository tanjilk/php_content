<div class="titulo">Função $ Escopo</div>

<?php
    function imprimirMensagens(){
        echo "Olá! ";
        echo "Ate á proxima!<br>";
    }

    imprimirMensagens();
    imprimirMensagens();
    imprimirMensagens();
    
    $variavel = 1;
    function trocarValor(){
        $variavel = 2;
        echo "Durante a função: $variavel <br>";
    }
    echo "Antes: $variavel <br>";
    trocarValor();
    echo "Depois: $variavel<br>";
    
?>