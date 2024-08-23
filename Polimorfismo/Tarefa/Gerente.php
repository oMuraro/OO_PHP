<?php
    class Gerente extends Funcionario{
        
        public function __construct($codigo, $nome, $salario){
            parent::__construct($codigo, $nome, $salario);
        }

        public function calcularBonificacao(){
            return "<br>Bonificação: " . ($this->salario*15)/100 . "<br>";
        }

        public function showAttribute(){
            return parent::showAttribute();
        }
    }
?>