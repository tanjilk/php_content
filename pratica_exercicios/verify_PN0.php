<div class="titulo">Verify PN0</div>

<form action="#" method="post">

    <div>
        <label for="numero">Número</label>
        <input type="number" name="num">
    </div>

</form>

<?php

    /*
    1) - Crie um algoritmo que receba um número digitado pelo utilizador e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".
    */
    function verifyPN0(int $num){
        if($num < 0){
            echo 'Valor Negativo' . '<br>';
        } else if($num > 0) {
            echo 'Valor Positivo' . '<br>';
        } else{
            echo 'Igual a zero';
        }
    }
    
    $num = intval($_POST['num']);
    verifyPN0($num);
    

?>