<?php
    require_once "interfaceConta.php";
    require_once "ContaCorrente.php";
    require_once "ContaPoupanca.php";

    function realizarSaque(Conta $conta, $valor){
        $conta->sacar($valor);
        echo "Novo Saldo: " . $conta->getSaldo() . "\n";
    }

    $contaCorrente = new ContaCorrente(2000);
    realizarSaque($contaCorrente, 3000);
    echo "<br>";
    $contaPoupanca = new ContaPoupanca(1000);
    realizarSaque($contaPoupanca, 500);

?>