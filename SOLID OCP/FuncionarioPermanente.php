<?php
    class FuncionarioPermanente implements CalculadoraSalarios{
        public function calcularSalario(Funcionario $funcionario){
            return $funcionario->salario + ($funcionario->salario * 0.03);
        }
    }
?>