<?php
    class Funcionario{
        protected $codigo;
        protected $nome;
        protected $salario;

        public function __construct($codigo, $nome, $salario){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->salario = $salario;
        }

        public function calcularBonificacao(){
            return "<br>Bonificação: " . ($this->salario*10)/100 . "<br>";
        }

        public function showAttribute(){
            return "<br>Codigo: " . $this->codigo . " - Nome: " . $this->nome . " - Salário: " . $this->salario;
        }
    }
?>