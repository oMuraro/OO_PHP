<?php
    class Banco{
        private $poupanca;
        private $contaCorrente;

        public function __construct(){
            $this->poupanca = [];
            $this->contaCorrente = [];
        }

        public function addPoupanca($saldo){
            $this->poupanca[] = new Poupanca($saldo);
        }

        public function addContaCorrente($saldo, $limite){
            $this->contaCorrente[] = new ContaCorrente($saldo, $limite);
        }

        public function mostrarPoupanca(){
            return $this->poupanca;
        }

        public function mostrarContaCorrente(){
            return $this->contaCorrente;
        }
    }
?>