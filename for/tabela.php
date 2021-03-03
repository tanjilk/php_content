<div class="titulo">Desafio Tabela</div>

<?php

    $matrix = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];
    /*

    foreach($matrix as $linha){
        foreach($linha as $valor){
            echo "$valor ";
        }
        echo "<br>";
    }

    echo "<hr>";
    */
    echo '';
?>


<table>
    <?php
        foreach($matrix as $linha){
            echo '<tr>';
            foreach($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
        echo "<hr>";  
    ?>
</table>

<table>
    <?php
        foreach($matrix as $index => $linha){
            $style = $index % 2 === 1 ? 'background-color: lightblue;' : '';
            echo "<tr style='{$style}'>";
            foreach($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }
    ?>
</table>

<table>
        <?php
            $array = [
                [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                [11,12,13,14,15,16,17,18,19,20],
                [21,22,23,24,25,26,27,28,29,30],
                [31,32,33,34,35,36,37,38,39,40]

            ];
            foreach($array as $linh){
                echo "<tr>";
                foreach($linh as $value){
                    echo "<td>$value</td>";
                }
                echo "<tr>";
            }

        ?>
</table>

<table>
    <?php
        foreach($array as $indice => $linha){
            $style = $indice % 2 === 1 ? 'background-color: lightblue;' : '';
            echo "<tr style='{$style}'";
            foreach($linha as $valor){
                echo "<td>$valor</td>";
            }
            echo '</tr>';
        }  
    ?>
</table>

<table>
<?php
            foreach($array as $indice => $linha){
                echo "<tr>";
                foreach($linha as $valor){
                    $style = $valor % 2 === 0 ? 'background-color: lightblue' : 'background-color: lightgreen;';
                    echo "<td style='{$style}'>$valor</td>";
                }
                echo "</tr>";
            }
        ?>
</table>


<style>
    table {
        border: 1px solid #4444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;

    }

</style>