<div class="titulo">Closure & Callable</div>

<?php

    $soma1 = function($a, $b){
        return $a + $b;
    };

    echo $soma1(2,3) . '<br>';
    echo is_callable($soma1);

    $soma1 = 1;
    echo '<br>';
    
    if(is_callable($soma1) != 1){
        echo 'NAO da';
    }

?>