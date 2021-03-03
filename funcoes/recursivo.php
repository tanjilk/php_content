<div class="titulo">Recursividade</div>

<?php
    function somaUmAte($num){
        $soma = 0;
        for(; $num >= 1; $num--){
            $soma = $soma + $num;
        }
        return $soma;
    }

    function somaUmAte_1($num){
        $soma = 0;
        for($i = 0; $i <= $num; $i++){
            $soma = $soma + $i;
        }
        return $soma;
    }

    function somaRecursiva($num){
        if($num == 1){
            return 1;
        } else {
            return $num + somaRecursiva($num - 1);
        }
    }

    echo somaRecursiva(5) . '<br>';

    function somaRecursivaEconomica($num){
        return $num === 1 ? 1 : somaRecursivaEconomica($num - 1);
    }

    echo somaRecursiva(5);
?>