<?php
function calculate($num1, $num2, $operator){
      switch($operator){
        case "Add":
          return $num1 + $num2;
        break;
        case "Substract":
          return $num1 - $num2;
        break;
        case "Multiply":
          return $num1 * $num2;
        break;
        case "Divide":
          return $num1 / $num2;
        break;
      }
    }
?>