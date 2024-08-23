<?php
    class Funcionario{
        private $codigo;
        private $nome;
        private $salario;

        public function __construct($codigo, $nome, $salario){
            $this->setCodigo($codigo);
            $this->setNome($nome);
            $this->setSalario($salario);
        }
    
        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }
    
        public function getNumero(){
            return $this->codigo;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setSalario($salario){
            $this->salario = $salario;
        }
    
        public function getSalario(){
            return $this->salario;
        }

        public function showAttribute(){
            echo "<br>Código: " . $this->codigo;
            echo " Nome: " . $this->nome;
            echo " Salário:" . $this->salario;
        }

        public function reajusteSalarial($porcent){
                $aumento = ($this->salario * $porcent) / 100;
                $this->salario = $this->salario + $aumento;
        }
    }

    $f1 = new Funcionario(1, "Pedro", 3000.00);
    $f1 -> showAttribute();
    $f1 -> reajusteSalarial(20);
    $f1 -> showAttribute();

    $f2 = new Funcionario(2, "Clara", 18000);
    $f2 -> showAttribute();
    $f2 -> reajusteSalarial(100);
    $f2 -> showAttribute();
?>