<?php
      $Verdadeiro = true;
      $Falso = false;
       // echo("O valor da variavel Verdadeiro é: $Verdadeiro");
      //echo nl2br("\nO valor da variavel Falso é: $Falso");

      echo ("O valor da variavel Verdadeiro é: ");
      var_dump($Verdadeiro);
       echo nl2br ("\n");
       echo ("O valor da variavel Falso é: ");
      var_dump($Falso);
      echo nl2br ("\n\n");
      $nome1 = "Paulo";
      $nome2 = "paulo";
      $nome3 = "Paulo";
      $numero1 = 10;
      $numero2 = 5;
      $numero3 = "10";
      $numero4 = 5;
      //Trabalhando Operadores de Comparação Igual
      echo("$nome1 == $nome2 :");
      var_dump(($nome1 == $nome2));
      echo nl2br("\n$nome1 == $nome3 :");
      var_dump(($nome1 == $nome3));
      //Trabalhando Operadores de Comparação Diferente
      echo nl2br ("\n$nome1 != $nome2 :");
      var_dump(($nome1 != $nome2));
      echo nl2br("\n$nome1 != $nome3 :");
      var_dump(($nome1 != $nome3));
       //Trabalhando Operadores de Comparação Menor que
       echo nl2br ("\n$numero1 < $numero2 :");
       var_dump(($numero1 < $numero2));
       echo nl2br("\n$numero1 < $numero3 :");
       var_dump(($numero2 < $numero1));
     //Trabalhando Operadores de Comparação Maior ou Igual
     echo nl2br ("\n$numero1 >= $numero2 :");
     var_dump(($numero1 >= $numero2));
     echo nl2br("\n$numero1 >= $numero3 :");
     var_dump(($numero1 >= $numero4));
     //Trabalhando Operadores de Comparação Idêntico e Não Idêntico
     echo nl2br ("\n$numero1 !== $numero2 :");
     var_dump(($numero1 !== $numero4));
     echo nl2br("\n$numero1 !== $numero3 :");
     var_dump(($numero1 !== $numero4));

 ?>
