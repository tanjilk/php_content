<div class="titulo">Resolver uma Equação</div>
<?php
    
    $equacao = ( 6 * (3 + 2) ) ** 2;
    $equacao_2parcela = ( (1-5) * (2-7) / 2 ) ** 2;
    $equacao_completa = ( ($equacao - $equacao_2parcela) ** 3 ) / 3;
    echo $equacao_completa . "<br>";

    $equacao_2 = ( (150 - 100) ** 3 ) / 10 ** 3;
    echo $equacao_2;
?>