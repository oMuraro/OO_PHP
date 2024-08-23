<?php
    require_once 'Cliente.php';
    require_once 'Conta.php';

    $cliente = new Cliente();
    $cliente->setNome("Ana");
    $cliente->setEndereco("Rua Abacata, 143");
    $cliente->setRg(19259921);

    $conta = new Conta();
    $conta->setNumero(1);
    $conta->setSaldo(100.00);
    $conta->setTitular($cliente); //associacao

    echo "<pre>";
    var_dump($cliente);
    var_dump($conta);
    echo "</pre>";
?>