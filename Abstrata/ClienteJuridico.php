<?php
    class ClienteJuridico extends Cliente{
        private $cnpj;
        private $ie;

        public function setCnpj($cnpj){
            $this->cnpj = $cnpj;
        }

        public function setIe($ie){
            $this->ie = $ie;
        }

        public function mostrarDados(){
            parent::mostrarDados();
            echo "<br>CNPJ: " . $this->cnpj . " - IE: " . $this->ie;
        }

        public function avaliaIdade(){
            if($this->idade > 40){
                echo "<br>Cliente Jurídico";
            }
        }
    }
?>