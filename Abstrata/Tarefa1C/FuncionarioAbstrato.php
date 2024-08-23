<?php
    require_once "Funcionario.php";
    require_once "Departamento.php";
    require_once "Concursado.php";
    require_once "Comissionado.php";
    require_once "Filhos.php";

    $filho1 = new Filhos(1, "Pedro", 18);
    $filho2 = new Filhos(2, "Matheus", 19);
    $filho3 = new Filhos(3, "Arthur", 16);
    $filho4 = new Filhos(4, "Paulo", 20);
    $filho5 = new Filhos(5, "Pablo", 10);


    $con = new Concursado();
    $con->setCodigo(1);
    $con->setNome("Sérgio");
    $con->setSalario(3000);
    $con->setNumeroEdital(1);
    // echo "<br>Salário calculado: " . $con->calcularSalario(4);
    $con->AdicionarFilhos($filho1);
    $con->AdicionarFilhos($filho2);
    $con->AdicionarFilhos($filho3);
    $con->removerFilhoMaiorIdade(2);
    echo "<br>Total de Filhos: " . $con->calcularTotalFilhos();
    $con->listarDadosDosFilhos();
    // $con->showAttribute();

    $com = new Comissionado();
    $com->setCodigo(2);
    $com->setNome("Rodrigo");
    // $com->setSalario(4000);
    // $com->setPorcentagem(30);
    // echo "<br>Salário calculado: " . $com->calcularSalario(5);
    $com->AdicionarFilhos($filho4);
    $com->AdicionarFilhos($filho5);
    $com->removerFilhoMaiorIdade(5);
    $com->removerFilhoMaiorIdade(4); //Filho de menor idade
    echo "<br>Total de Filhos: " . $com->calcularTotalFilhos();
    $com->listarDadosDosFilhos();
    // $com->showAttribute();

    $ti = new Departamento(1, "TI");
    $ti->admitirFuncionario($con);
    $ti->admitirFuncionario($com);
    $ti->mostrarQtdeFilhosPorFuncionario();
    // $ti->mostrarAtributos();
    // $ti->listarDadosFuncionarios();
    // echo "<br>Folha de Pagamento: " . $ti->calcularFolhaPagamento(4) . "<br>";
    // $ti->demitirFuncionario(1);
    // $ti->listarDadosFuncionarios();


?>