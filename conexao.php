<?php
    $dsn="mysql:host=localhost;dbname=turmaj";
    $usuario="root";
    $senha = "";
    
    try{
        $conexao = new PDO($dsn,$usuario,$senha);
        echo "conexão com banco de dados realizada!!!";
    }catch(PDOExeption $erro){
        echo "Não foi possível se conectar com o banco".$erro->getMessage();
    }
?>
 