<?php
    class Filhos{
        private $codigo;
        private $nome;
        private $idade;

        public function __construct($codigo, $nome, $idade){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function verificarMaiorIdade(){
            if($this->idade >= 18){
                return true;
            } else {
                return false;
            }
        }

        public function mostrarDados(){
            echo "<br>Código: " . $this->codigo . " - " . "Nome: " . $this->nome . " - " . "Idade: " . $this->idade;
        }
    }