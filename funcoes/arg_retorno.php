<div class="titulo">Argumento</div>


<?php

    function obterMensagem(){
        return 'Bem vindo!';
    }

    function obterMensagemNome($nome){
        return "Bem vindo, {$nome}!";
    }

    function soma($a, $b){
        return $a + $b;
    }

    function trocarValor(&$a, $novoValor){
        $a = $novoValor;
    }

echo obterMensagem();
$myName = 'Tanjil';
echo '<br>';
echo obterMensagemNome($myName);
echo '<br>';

// echo soma(4, 2);

echo '<br>';

$a_ = 4;
echo $a_;
trocarValor($a_, 200);
echo '<br>';
echo $a_;
?>
