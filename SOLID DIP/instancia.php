<?php
    require_once "interfaceLeiDeEntrega.php";
    require_once "interfaceCorreios.php";
    require_once "NotaFiscal.php";
    require_once "EntregadorDeNFs.php";
    require_once "DespachadorDeNotasFiscais.php";
    require_once "CalculadoraDeImposto.php";

    class CorreiosImpl implements Correios {
        public function enviarPorSedex10(NotaFiscal $nf) {
            echo "Nota Fiscal enviada por SEDEX 10. <br>Imposto: " . $nf->getImposto() . "\n";
        }

        public function enviarPorSedexComum(NotaFiscal $nf) {
            echo "Nota Fiscal enviada por SEDEX Comum. <br>Imposto: " . $nf->getImposto() . "\n";
        }
    }

    class LeiDeEntregaImpl implements LeiDeEntrega {
        public function deveEntregarUrgente(NotaFiscal $nf) {
            return $nf->getImposto() > 50;
        }
    }

    $correios = new CorreiosImpl();
    $leiDeEntrega = new LeiDeEntregaImpl();
    $calculadoraImposto = new CalculadoraDeImposto();
    $entregador = new EntregadorDeNFs($correios, $leiDeEntrega);
    $despachador = new DespachadorDeNotasFiscais($calculadoraImposto, $entregador);

    $notaFiscal = new NotaFiscal();
    $notaFiscal->setImposto(510); //Entrega com o sedex 10
    // $notaFiscal->setImposto(200); //Entrega com o sedex comum

    $despachador->processa($notaFiscal);

    $entregador->entregar($notaFiscal);
?>