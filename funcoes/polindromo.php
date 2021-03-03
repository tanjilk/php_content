<div class="titulo">Palindromo</div>

<?php

function palindromo($palavra){
    
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] != $palavra[$ultimoIndice - $i]){
            return 'Nao';
        }
    }
    return 'Sim';

}

function palindromoFun($palavra){
    return $palavra == strrev($palavra) ? 'Sim' : 'Nao';
}

echo palindromo('ana');
echo '<br>';
echo palindromo('bola');
echo '<br>';
echo palindromoFun('arara');
echo '<br>';
echo palindromoFun('achas');

?>