<?php
    Class Produto{
        private $descricao;
        private $preco;
        private $estoque;
        private $fabricante;

        public function __construct($descricao, $preco, $estoque, Fabricante $fabricante){
            $this->descricao = $descricao;
            $this->preco = $preco;
            $this->estoque = $estoque;
            $this->fabricante = $fabricante;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setFabricante(Fabricante $fabricante){
            $this->fabricante = $fabricante;
        }

        public function getFabricante(){
            return $this->fabricante;
        }
    }
?>