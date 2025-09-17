<?php
  $diaSemana = $_GET["diaSemana"];
  switch ($diaSemana){
      case 1 : echo("Hoje estamos no dia Um"); break;
      case 2 : echo("Hoje estamos no dia Dois"); break;
      case 3 : echo("Hoje estamos no dia Três"); break;
      case 4 : echo("Hoje estamos no dia Quatro"); break;
      case 5 : echo("Hoje estamos no dia Cinco"); break;
      case 6 : echo("Hoje estamos no dia Seis"); break;
      case 7 : echo("Hoje estamos no dia Sete"); break;
      default: echo("Dia inválido");
    }
  //var_dump($_GET);
?>