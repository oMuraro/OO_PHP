<?php
    class Secretario extends Funcionario{

        public function __construct($codigo, $nome, $salario){
            parent::__construct($codigo, $nome, $salario);
        }

        public function calcularBonificacao(){
            return parent::calcularBonificacao();
        }

        public function showAttribute(){
            return parent::showAttribute();
        }
    }
?>