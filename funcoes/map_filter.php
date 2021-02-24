<div class="titulo">Map & Filter</div>

<?php

$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach($notas as $nota){
    $notasFinais_1[] = round($nota);
}

// print_r($notasFinais_1);
$notasFinais2 = array_map(round, $notas);
echo 'Notas: ';
print_r($notasFinais2);
echo '<br>';

$aprovados = [];

foreach($notas as $nota){
    if($nota >= 7){
        $aprovados1[] = $nota;
    }
}
// echo 'Aprovados: ';

//print_r($aprovados1);

function aprovados($nota){
    return $nota >= 7;
}

echo 'Aprovados 2: ';

$apenasAprovados_2 = array_filter($notas, aprovados);
echo '<br>';
print_r($apenasAprovados_2);



function calculoL($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo '<br>';
$notasFinais = array_map(calculoL, $notas);
print_r($notasFinais);