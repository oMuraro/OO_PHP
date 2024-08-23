<?php
    require_once "Funcionario.php";
    require_once "Secretario.php";
    require_once "Gerente.php";
    require_once "Diretor.php";

    $s = new Secretario(1, "Diogo", 500);

    $g = new Gerente(2, "João", 20000);

    $d = new Diretor(3, "Paulo", 50000);

    echo $s->showAttribute();
    echo $s->calcularBonificacao();

    echo $g->showAttribute();
    echo $g->calcularBonificacao();

    echo $d->showAttribute();
    echo $d->calcularBonificacao();
?>  