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

  switch ($tipoMembrecia) {
    case "A":
      $total = $total * 0.7;
      break;
    case "B":
      $total = $total * 0.75;
      break;
    case "C":
      $total = $total * 0.9;
      break;
    case "D":
      $total = $total * 0.95;
      break;
    default:
      echo "no hay descuento ";
  }

echo "el total a pagar es:" . "\n" . number_format ($total);
?>