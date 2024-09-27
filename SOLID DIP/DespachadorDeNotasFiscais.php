<?php
    class DespachadorDeNotasFiscais{
        private CalculadoraDeImposto $impostos;
        private EntregadorDeNFs $entregador;

        public function __construct(CalculadoraDeImposto $impostos, EntregadorDeNFs $entregador){
            $this->impostos = $impostos;
            $this->entregador = $entregador;
        }

        public function processa(NotaFiscal $nf){
            $imposto = $this->impostos->para($nf);
            $nf->setImposto($imposto);
        }
    }
?>