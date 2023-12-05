<?php
  include 'operationUtils.php';
  // Datos de entrada
  $numberOne = 0;
  $numberTwo = 0;
  $option = 0;

  //1. llamar funcion para pedir numeros
  $numberOne = getNum();
  $numberTwo = getNum();

  // 2. llamar la funcion para mostrar menu y obtener la opcion del usuario 
  $option = showMenu();

  // 3. llamar la funcion que seleccione la operacion
  $result = operate($numberOne, $numberTwo, $option);

  // 4. mostrar el resultado
  echo "El resultado es: " . $result;
?>