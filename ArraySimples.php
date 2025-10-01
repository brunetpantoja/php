<?php
 $nomes = ['Maria','Joao','Ana','Fernando','Carol','Higor',123];
 //for($cont = 0; $cont <= 2; $cont++){
 //    echo nl2br("$nomes[$cont]\n");
//}
//foreach( $nomes as $nome){
   //    echo nl2br("$nome\n");
   // }
   if($_SERVER['REQUEST_METHOD']=='POST'){
         if(!empty($_POST['nome'])){
         echo $_POST['nome'];
        }
    }
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
    <form method= "POST">
      <?php foreach($nomes as $nome) :?>
         <input type="radio" name= "nome" value= "<?php echo $nome;?>"/>
         <label><?php echo $nome;?></label><br/>
        <?php endforeach;?>
      <input type="submit" value= "Enviar" />
    </form>
</body>
</html>