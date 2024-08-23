<?php
    class Mensalista extends Funcionario{
        protected $qtdeHorasTrabalhadas;

        public function __construct($codigo, $nome, $salario, $qtdeHorasTrabalhadas){
            parent::__construct($codigo, $nome, $salario);
            $this->qtdeHorasTrabalhadas = $qtdeHorasTrabalhadas;
        }

        public function mostrarAtributos(){
            echo "<br>Mensalista:";
            echo "<br>Código: " . $this->codigo;
            echo "<br>Nome: " . $this->nome;
            echo "<br>Salário: " . $this->salario;
            echo "<br>Quantidade de horas trabalhadas: " . $this->qtdeHorasTrabalhadas . "<br>";
        }
    }
?>