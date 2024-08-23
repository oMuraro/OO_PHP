<?php
    require_once "Cliente.php";
    require_once "ClienteFisico.php";
    require_once "ClienteJuridico.php";
    require_once "Teste.php";

    // $cliente = new Cliente();
    
    $cf = new ClienteFisico();
    $cf->setCodigo(1);
    $cf->setNome("Ana");
    $cf->setIdade(21);
    $cf->setRg("11.111.111-1");
    $cf->setCpf("111.111.111-11");
    $cf->mostrarDados();

    $cj = new ClienteJuridico();
    $cj->setCodigo(2);
    $cj->setNome("Pedro");
    $cj->setIdade(45);
    $cj->setCnpj("222.222.222-001-22");
    $cj->setIe("111.222.333");
    $cj->mostrarDados();

    $teste = new Teste();
    $teste->verificaIdade($cf);
    $teste->verificaIdade($cj);
?>