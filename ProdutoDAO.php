<?php
    class ProdutoDAO{
        public $conexao;

        public function __construct($conexao){
            $this->conexao = $conexao;
        }
        public function cadastrarDadosBanco($produtoDTO){
            $sql = 'INSERT INTO produto (nome,valor,quantidade,descricao) VALUE (:nome,:valor,:quantidade,:descricao)';
            $insert = $this->conexao->prepare($sql);

            $insert->bindvalue(":nome",$produtoDTO->__getNome());
            $insert->bindvalue(":valor",$produtoDTO->__getValor());
            $insert->bindvalue(":quantidade",$produtoDTO->__getQuantidade());
            $insert->bindvalue(":descricao",$produtoDTO->__getDescricao());

            $insert->execute();

        }
    } 
?>