<?php
    require_once "Funcionario.php";
    require_once "Concursado.php";
    require_once "Comissionado.php";

    $con = new Concursado();
    $con->setCodigo(1);
    $con->setNome("Sérgio");
    $con->setSalario(3000);
    $con->setNumeroEdital(1);
    $con->showAttribute();
    echo "<br>Salário calculado: " . $con->calcularSalario(4);

    $com = new Comissionado();
    $com->setCodigo(2);
    $com->setNome("Rodrigo");
    $com->setSalario(4000);
    $com->setPorcentagem(30);
    $com->showAttribute();
    echo "<br>Salário calculado: " . $com->calcularSalario(5);
?>