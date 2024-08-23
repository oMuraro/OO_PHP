<?php
    require_once "TributavelInterface.php";
    require_once "ContaCorrente.php";
    require_once "SeguroDeVida.php";
    require_once "TotalizadorDeTributos.php";

    $totalizador = new TotalizadorDeTributos;
    $totalizador->adiciona(new ContaCorrente(200));
    $totalizador->adiciona(new SeguroDeVida);
    $totalizador->adiciona(new SeguroDeVida);
    $totalizador->adiciona(new ContaCorrente(100));

    echo "O total é: " . $totalizador->getTotal();
?>