<?php
  //Datos de entrada
  $numbers = array (4, 7, 2, 8, 35);
  $sumNumbers = 0;

  //Proceso
  foreach ($numbers as $i) {
     $sumNumbers =  $sumNumbers+$i;
  }

  echo "LA SUMA DE ESTE ARREGLO ES: " . $sumNumbers;
?>