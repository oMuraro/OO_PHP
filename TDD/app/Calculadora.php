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

        public function multiplicacao($a, $b){
            return $a * $b;
        }

        public function divisao($a, $b){
            return $a / $b;
        }

        public function subtracao($a, $b){
            return $a - $b;
        }
    }
?>