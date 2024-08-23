<?php
    require_once "Produto.php";
    require_once "Vendedor.php";
    require_once "Comprador.php";

    $v1 = new Vendedor(2);

    $c1 = new Comprador(1000);

    $p1 = new Produto(1, "Colchão", 500);
    $preco = $p1->getPreco();

    $p1->MostrarAtributo();

    $v1->somaComissao($preco);
    $v1->MostrarAtributo();

    $c1->MostrarAtributo();
    $c1->gastarVerba(200);
    $c1->gastarVerba(2000);
?>