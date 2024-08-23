<?php
    require_once 'Produto.php';
    require_once 'Fabricante.php';

    $fabricante = new Fabricante("Sérgio", "Rua Paulo Roberto, 132", "Documento 205918");

    $produto = new Produto("Porta", 100, 10, $fabricante);

    var_dump($fabricante);
    echo "<br>";
    var_dump($produto);
?>