<?php
    abstract class Cliente{
        protected $codigo;
        protected $nome;
        protected $idade;

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function mostrarDados(){
            echo "<br>Código: " . $this->codigo . " - Nome: " . $this->nome . " - Idade: " . $this->idade;
        }

        public abstract function avaliaIdade();
    }
?>