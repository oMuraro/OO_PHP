<?php
class ContaCorrente implements Tributavelnterface
{
    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
    }

    public function calculaTributos()
    {
        $parte = ($this->saldo / 100) * 5;
        return $parte;
    }
}
