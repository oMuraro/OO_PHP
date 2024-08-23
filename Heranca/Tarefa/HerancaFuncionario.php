<?php
    require_once "Funcionario.php";
    require_once "Mensalista.php";
    require_once "Horista.php";

    $m1 = new Mensalista(1, "Pedro", 3000, 100);
    $m2 = new Mensalista(2, "Érica", 2500, 90);
    $m3 = new Mensalista(3, "Alexandre", 3580.10, 120);
    $m1->mostrarAtributos();
    $m2->mostrarAtributos();
    $m3->mostrarAtributos();

    $h1 = new Horista(4, "Cleber", 150, 30);
    $h2 = new Horista(5, "Maria", 180, 40);
    $h3 = new Horista(6, "Clara", 210, 56);
    $h1->mostrarAtributos();
    $h2->mostrarAtributos();
    $h3->mostrarAtributos();
?>