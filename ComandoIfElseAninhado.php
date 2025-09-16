<?php
$idade = 20;
$testePratico = false;
if(($idade >= 18) && ($testePratico == true)){
  echo("Pode retirar CNH");
  } else{
   if(($idade < 18) && ($testePratico == false)){
      echo("Reprovado pela idade e Teste Prático");
   }else{
      if($idade < 18){
        echo("Reprovado pela idade");
      }else{
       echo("Reprovado pelo teste prático");

         }
   
     } 

  }
?>