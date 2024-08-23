<?php
    class Concursado extends Funcionario{
        private $numeroEdital;

        public function setNumeroEdital($numeroEdital){
            $this->numeroEdital = $numeroEdital;
        }

        public function calcularSalario($diasUteis){
            return ($this->salario / 30) * $diasUteis;
        }

        public function showAttribute(){
            parent::showAttribute();
            echo "<br>Número Edital: " . $this->numeroEdital;
        }
    }
?>