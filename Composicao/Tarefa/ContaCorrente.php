<?php
    Class ContaCorrente{
        private $saldo;
        private $limite;

        public function __construct($saldo, $limite){
            $this->saldo = $saldo;
            $this->limite = $limite;
        }

        public function Depositar($valor){
            $this->saldo = $this->saldo + $valor;
        }

        public function Sacar($valor){
            if($valor > ($this->limite + $this->saldo)){
                echo "<br>Saldo insuficiente";
            } else {
                $this->saldo = $this->saldo - $valor;
            }
        }

        public function GerarExtrato(){
            return $this->saldo;
        }
    }
?>