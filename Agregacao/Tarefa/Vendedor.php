<?php
    class Vendedor{
        private $comissao;

        public function __construct($comissao){
            $this->comissao = $comissao;
        }

        public function somaComissao($preco){
            $this->comissao = $preco * ($this->comissao / 100);
        }

        public function MostrarAtributo(){
            echo "<br>Comissão: " . $this->comissao;
        }
    }
?>