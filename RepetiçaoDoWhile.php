<?php
 if(! empty($_GET ['numero'])){
    $numero =$_GET['numero'];
    $cont = 0;
    $numero =$_GET['numero'];
    $cont = 0;
    do{
      echo nl2br("O numero foi:".$numero."\n");
      $numero = $numero + 1;
      $cont = $cont + 1;
    }while($cont<=4);
 }else{
}
   echo("Varíavel não setada ou vazia ou foi enviado um texto");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    <label>Informe um numero: </label>
    <input type="text" name="numero" placeholder="Digite um numero"/>
    <incut type= "submit" value= "Enviar" />
</form>
</body>
</html>