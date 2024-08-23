<?php
//Criar classe funcionario com matricula, nome, saladio ✓✓
//criar os métodos de encapsulamento dos atributos ✓✓
//criar um método para admitir um funcionário inserindo matricula nome e salario ✓✓
//criar outro método para demitir o funcionario, atribuindo salario zero ✓✓
//criar o método de apresentação dos atributos ✓✓

    class Funcionario{
        private $nome;
        private $matricula;
        private $salario;

        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function getNome(){
            return $this->nome;
        }
    
        public function getMatricula(){
            return $this->matricula;
        }
    
        public function getSalario(){
            return $this->salario;
        }

        public function Demitir(){
            $this->salario = 0;
        }

        public function showAttribute(){
            echo "<br>Número: " . $this->nome;
            echo " Titular: " . $this->matricula;
            echo " Saldo :" . $this->salario;
        }
    }

    $f1 = new Funcionario;
    $f1 -> setNome("Pablo");
    $f1 -> setMatricula(1);
    $f1 -> setSalario(2000.00);
    $f1 -> showAttribute();
    $f1 -> Demitir();
    $f1 -> showAttribute();
    echo "<br>Nome: " . $f1->getNome();
?>


