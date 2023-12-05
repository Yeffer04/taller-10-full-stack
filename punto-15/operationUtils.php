<?php
  // 1. funcion para obtener un numero
  function getNum() {
    echo "Ingrese el numero a operar: \n";
    return readline();
  }

  // 2. funcion para mostar menu y retornar respuesta
  function showMenu() {
    echo "Seleccione la opcion de operacion siendo: \n";
    echo "1 - Suma \n";
    echo "2 - Resta \n";
    echo "3 - Multiplicacion \n";
    echo "4 - Division \n";
    return readline();
  }

  // 3. funcion que realice la operacion correcta
  function operate($x, $y, $option) {
    switch ($option) {
      case 1:
        return add($x, $y);
      case 2:
        return sub($x, $y);
      case 3:
        return dot($x, $y);
      case 4:
        return split($x, $y);
      default:
      echo "opcion no valida \n";
      return 0;
    }  
  }

  // 4. funcion por cada operacion
  function add($x, $y) {
    return $x + $y;
  }

  function sub($x, $y) {
    return $x - $y;
  }

  function dot($x, $y) {
    return $x * $y;
  }

  function split($x, $y) {
    return $x / $y;
  }

?>