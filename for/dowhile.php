<div class="titulo">While/Do while</div>
 
 <?php

 const VALOR_LIMITE = 5;
 $contador = 0;

 while($contador < VALOR_LIMITE){
     echo "while $contador <br>";
     $contador++;
 }

 echo "<hr>";

 do {
     echo "while $contador <br>";
     $contador++;
 } while($contador < VALOR_LIMITE);

 echo "<hr>";

for($contador = 0; $contador < VALOR_LIMITE; $contador++){
    echo "$contador";
}

echo "<br>";

while(true){
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMITE){
        break; 
    }
}
 ?>