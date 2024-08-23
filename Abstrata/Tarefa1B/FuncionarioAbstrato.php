<?php
    require_once "Funcionario.php";
    require_once "Departamento.php";
    require_once "Concursado.php";
    require_once "Comissionado.php";

    $con = new Concursado();
    $con->setCodigo(1);
    $con->setNome("Sérgio");
    $con->setSalario(3000);
    $con->setNumeroEdital(1);
    echo "<br>Salário calculado: " . $con->calcularSalario(4);
    $con->showAttribute();

    $com = new Comissionado();
    $com->setCodigo(2);
    $com->setNome("Rodrigo");
    $com->setSalario(4000);
    $com->setPorcentagem(30);
    echo "<br>Salário calculado: " . $com->calcularSalario(5);
    $com->showAttribute();

    $ti = new Departamento(1, "TI");
    $ti->admitirFuncionario($con);
    $ti->admitirFuncionario($com);
    $ti->mostrarAtributos();
    $ti->listarDadosFuncionarios();
    echo "<br>Folha de Pagamento: " . $ti->calcularFolhaPagamento(4) . "<br>";
    $ti->demitirFuncionario(1);
    $ti->listarDadosFuncionarios();


?>