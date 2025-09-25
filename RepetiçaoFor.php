<?php
if(!empty($_GET['numero'])&& is_numeric($_GET['numero'])){
    $numero = $_POST['numero'];
for($cont = 0; $cont <= 10 ; $cont++){
    echo nl2br("$numero + $cont =".$numero + $cont. "\n");
}
}else{
    echo("Variavel não setada ou vazia ou não foi digitado um número");
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
        <label>Informe um número: </label>
        <input type= "number" name="numero" placeholder="Digite um número" />
 </form>
</body>
</html>