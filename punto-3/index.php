<?php
  // creacion de datos

  $firstNumber = 0;
  $secondNumber = 0;
  echo "Digite el primer numero a sumar:  \n";
  $firstNumber = readline();
  echo "Digite el segundo numero a sumar:  \n";
  $secondNumber = readline();
  
  //proceso
  $result = $firstNumber + $secondNumber;
  echo $firstNumber . "+" . $secondNumber . " = " . $result . "\n";

  
?>