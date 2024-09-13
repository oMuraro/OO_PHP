<?php
    class ContaPoupanca implements Conta{
        protected $saldo;

        public function __construct($saldo){
            $this->saldo = $saldo;
        }

        public function sacar($valor){
            if($this->saldo < $valor){
                throw new Exception("Saldo Insuficiete");
            } else {
                $this->saldo -= $valor;
            }
        }

        public function getSaldo(){
            return $this->saldo;
        }
    }
?>