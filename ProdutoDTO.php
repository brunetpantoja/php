<?php
    class ProdutoDTO{
        private $id;
        private $nome;
        private $valor;
        private $quantidade;
        private $descricao;

        public function __construct(){

        }

        public function __getId(){
            return $this->id;
        }

        public function __setId($id){
            return $this->id = $id;
        }

        public function __getNome(){
            return $this->nome;
        }

        public function __setNome($nome){
            return $this->nome = $nome;
        }

        public function __getValor(){
            return $this->valor;
        }

        public function __setValor($valor){
            return $this->valor = $valor;
        }

        public function __getQuantidade(){
            return $this->quantidade;
        }

        public function __setQuantidade($quantidade){
            return $this->quantidade = $quantidade; 
        }

        public function __getDescricao(){
            return $this->descricao;
        }

        public function __setDescricao($descricao){
            return $this->descricao = $descricao;
        }
    }
?>