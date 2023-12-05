<?php
  // Datos de entrada
  $number = 0;

  echo "INGRESE EL NUMERO A MULTIPLICAR: \n";
  $number = readline();
  echo "LA TABLA DE SU NUMERO HASTA EL 30 ES\n";

  //Proceso
  for ($i = 1; $i <= 30; $i++) {
    echo $number . " x " . $i . " = " .($number * $i) . "\n";
  }

?>