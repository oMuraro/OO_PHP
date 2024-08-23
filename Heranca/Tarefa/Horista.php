<?php
    class Horista extends Funcionario{
        protected $qtdeHorasSemana;

        public function __construct($codigo, $nome, $salario, $qtdeHorasSemana){
            parent::__construct($codigo, $nome, $salario);
            $this->qtdeHorasSemana = $qtdeHorasSemana;
        }

        public function mostrarAtributos(){
            echo "<br>Horista:";
            echo "<br>Código: " . $this->codigo;
            echo "<br>Nome: " . $this->nome;
            echo "<br>Salário: " . $this->salario;
            echo "<br>Quantidade de horas na semana: " . $this->qtdeHorasSemana . "<br>";
        }
    }
?>