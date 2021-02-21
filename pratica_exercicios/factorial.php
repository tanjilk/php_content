<div class="titulo">Factorial</div>

<?php
      
    function factorial($num){
        $mult = 1;
        for($i = $num; $i != 0; $i--){
            $mult = $mult * $i;
        }
        return $mult;
    }

    echo factorial(4);
?>