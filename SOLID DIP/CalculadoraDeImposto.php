<?php
    class CalculadoraDeImposto{
        public function para(NotaFiscal $nf){
            $taxaTotal = ($nf->getImposto()/100) * 10;
            return $taxaTotal;
        }
    }
?>