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
    }
?>