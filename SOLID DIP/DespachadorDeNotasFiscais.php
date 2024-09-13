<?php
    class DespachadorDeNotasFiscais{
        private EntregadorDeNFs $entregador;

        public function __construct(EntregadorDeNFs $entregador){
            $this->entregador = $entregador;
        }

        public function processa(NotaFiscal $nf){
            
        }
    }
?>