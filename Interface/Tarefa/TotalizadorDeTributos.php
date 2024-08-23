<?php
class TotalizadorDeTributos
{
    private $total; // get public o set private

    public function getTotal(){
        return $this->total;
    }

    public function  adiciona(Tributavelnterface $ti)
    {
        $this->total += $ti->calculaTributos();
    }
}
