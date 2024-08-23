<?php
    class Diretor extends Funcionario{

        public function __construct($codigo, $nome, $salario){
            parent::__construct($codigo, $nome, $salario);
        }

        public function calcularBonificacao(){
            return "<br>Bonificação: " . (($this->salario*10)/100) + 1000 . "<br>";
        }

        public function showAttribute(){
            return parent::showAttribute();
        }
    }
?>