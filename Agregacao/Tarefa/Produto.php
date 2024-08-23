<?php
    Class Produto{
        private $codigo;
        private $nome;
        private $preco;

        public function __construct($codigo, $nome, $preco){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->preco = $preco;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function MostrarAtributo(){
            echo "<br>Codigo: " . $this->codigo;
            echo "<br>Nome: " . $this->nome;
            echo "<br>Preço: " . $this->preco;
        }
    }
?>