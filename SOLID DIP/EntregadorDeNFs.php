<?php
    class EntregadorDeNFs{
        private Correios $correios;
        private LeiDeEntrega $lei;

        public function __construct(Correios $correios, LeiDeEntrega $lei){
            $this->correios = $correios;
            $this->lei = $lei;
        }

        public function entregar(NotaFiscal $nf){
            if($this->lei->deveEntregarUrgente($nf)){
                $this->correios->enviarPorSedex10($nf);
            } else {
                $this->correios->enviarPorSedexComum($nf);
            }
        }
    }
?>