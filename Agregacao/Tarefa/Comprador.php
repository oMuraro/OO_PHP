<?php
    class Comprador{
        private $verba;

        public function __construct($verba){
            $this->verba = $verba;  
        }

        public function gastarVerba($gasto){
            if($gasto <= $this->verba){
                echo "<br>Verba: " . $this->verba - $gasto;
            } else {
            echo "<br>Verba Insuficiente";
            }
        }

        public function MostrarAtributo(){
            echo "<br>Verba: " . $this->verba;
        }
    }
?>