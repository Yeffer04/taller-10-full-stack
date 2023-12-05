<?php
  // Datos de entrada
  $i = 1;

   // proceso
  echo "LOS NUMEROS IMPARES DE 0 a 100 \n";
  for($y=1;$y<=100;$y=$y+2){
    echo $y . "/";
    $i = $i + $y;
  }
  echo "\n" . "Si los sumamos todos nos da un resultado de:" . $i;
?>