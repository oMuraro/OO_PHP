<?php
class Conta{
    private $numero;
    private $titular;
    private $saldo;

    public function __construct($numero, $titular, $saldo){
        $this->setNumero($numero);
        $this->setTitular($titular);
        $this->setSaldo($saldo);
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setTitular($titular){
        $this->titular = $titular;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function showAttribute(){
        echo "<br>Número: " . $this->numero;
        echo " Titular: " . $this->titular;
        echo " Saldo :" . $this->saldo;
    }
}

$c1 = new Conta(120, "Ana", 1200.89);
$c1 -> showAttribute();
?>