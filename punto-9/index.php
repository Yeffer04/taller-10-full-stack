<?php
  // Datos de entrada
  $number = 0 ;
  $i = 0 ;

  echo "Digite el numero a multiplicar: \n";
  $number = readline();

  // Proceso
  echo "Tabla del ".$number."\n";
  while($i <= 30){
   echo $number . "x" . $i . "=" . ($number * $i) . "\n";
    $i++;

  }
?>