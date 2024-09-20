<?php  
    namespace app;
    class Calculadora{
        public array $operacoes = [];
        public function getOperacoes(){
            return $this->operacoes;
        }


        public function soma($a, $b){
            return $a + $b;
        }
    }
?>