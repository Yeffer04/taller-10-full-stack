<?php
  //datos de entrada
  $tipoMembrecia = "";
  $numeroPersonas = 0;
  const PRECIO = 25000;

  // Proceso
  echo "digite el numero de personas que entran a la bolera: \n";
  $numeroPersonas = readline();

  echo "digite el tipo de membrecia: \n";
  $tipoMembrecia = readline();

  //process
  $total = $numeroPersonas * PRECIO;

  if($tipoMembrecia == "A" || $tipoMembrecia == "B" ) {
    $total = $total * 0.7;
  } else if ($tipoMembrecia == "C"){$total;}

echo "el total a pagar es:" . "\n" . number_format ($total);
?>