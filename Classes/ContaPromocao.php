<?php
class Conta{
    // private $numero;
    // private $titular;
    // private $saldo;

    public function __construct(private int $numero, private $titular, private $saldo){
        // $this->setNumero($numero);
        // $this->setTitular($titular);
        // $this->setSaldo($saldo);
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


?>