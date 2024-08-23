<?php
    abstract class Funcionario{
        protected $codigo;
        protected $nome;
        protected $salario;

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function showAttribute(){
            echo "<br>Código: " . $this->codigo . "<br>Nome: " . $this->nome . "<br>Salário: " . $this->salario;
        }

        public abstract function calcularSalario($diasUteis);
    }
?>