<?php
    require_once "CalculadoraSalarios.php";
    require_once "Funcionario.php";
    require_once "FuncionarioContrato.php";
    require_once "FuncionarioPermanente.php";

    $fc = new Funcionario('Jack', 1000, new FuncionarioContrato());
    echo "Nome: " . $fc->nome . " - Salário: " . $fc->getSalario();

    $fp = new Funcionario("Pedro", 2000, new FuncionarioPermanente());
    echo "<br>Nome: " . $fp->nome . " - Salário: " . $fp->getSalario();
?>