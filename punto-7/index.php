<?php
  // Datos de entrada
  $operation = " ";
  $firstNumber = 0;
  $secondNumber = 0;
  $result = 0;

  echo "Digite el primer numero a operar: \n";
  $firstNumber = readline();
  echo "digite el segundo numero a operar: \n";
  $secondNumber = readline();
  echo "seleccione la operacion a realizar: \n Suma(+) Resta(-) Multiplicacion(*) Division(/) \n";
  $operation = readline();

  //operacion
  switch ($operation) {
    case "+":
      $result = $firstNumber + $secondNumber;
    break;
    case "-":
      $result = $firstNumber - $secondNumber;
    break;
    case "*":
      $result = $firstNumber * $secondNumber;
    break;
    case "/":
      $result = $firstNumber / $secondNumber;
    break;
    default:
      echo "operacion no valida";
  }
  
  echo "El resultado de " . $firstNumber . $operation . $secondNumber . " es: " . $result;

?>