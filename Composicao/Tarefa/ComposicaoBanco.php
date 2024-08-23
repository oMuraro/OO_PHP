<?php
    require_once "ContaCorrente.php";
    require_once "Poupanca.php";
    require_once "Banco.php";

    $b1 = new Banco;
    $b1->addContaCorrente(2000, 200);
    $b1->addContaCorrente(1000, 100);
    $b1->addContaCorrente(1200, 50);

    $b1->addPoupanca(3000);
    $b1->addPoupanca(2000);
    $b1->addPoupanca(7000);
    
    foreach($b1->mostrarContaCorrente() as $conta){
        echo "Saldo conta Corrente: " . $conta->GerarExtrato() . "<br>";
    }

    foreach($b1->mostrarPoupanca() as $poupanca){
        echo "Saldo Poupança: " . $poupanca->gerarRendimento() . "<br>";
    }
?>