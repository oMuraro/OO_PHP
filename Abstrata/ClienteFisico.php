<?php
    class ClienteFisico extends Cliente{
        private $rg;
        private $cpf;

        public function setRg($rg){
            $this->rg = $rg;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function mostrarDados(){
            parent::mostrarDados();
            echo "<br>RG: " . $this->rg . " - CPF: " . $this->cpf;
        }

        public function avaliaIdade(){
            if($this->idade >= 18 && $this->idade < 40){
                echo "<br>Cliente Físico";
            }
        }
    }
?>