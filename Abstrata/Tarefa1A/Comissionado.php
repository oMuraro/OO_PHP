<?php
    class Comissionado extends Funcionario{
        private $porcentagem;

        public function setPorcentagem($porcentagem){
            $this->porcentagem = $porcentagem;
        }

        public function calcularSalario($diasUteis){
            return ($this->salario/30) * $diasUteis * ($this->porcentagem/100) + $this->salario; 
        }

        public function showAttribute(){
            parent::showAttribute();
            echo "<br>Porcentagem: " . $this->porcentagem;
        }
    }
?>