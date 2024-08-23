<?php
    Class Poupanca{
        private $saldo;

        public function __construct($saldo){
            $this->saldo = $saldo;
        }

        public function Depositar($valor){
            $this->saldo = $this->saldo + $valor;
        }

        public function Sacar($valor){
            if($valor <= $this->saldo){
                $this->saldo = $this->saldo - $valor;
            } else {
                echo "Saldo Insuficiente";
            }
        }

        public function gerarRendimento(){
            return $this->saldo;
        }
    }

?>