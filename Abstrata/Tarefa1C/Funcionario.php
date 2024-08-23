<?php
    abstract class Funcionario{
        protected $codigo;
        protected $nome;
        protected $salario;
        protected $vetFilhos;

        public function setCodigo($codigo){
            $this->codigo = $codigo;
        }

        public function getCodigo(){
            return $this->codigo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function showAttribute(){
            echo "<br>Código: " . $this->codigo . "<br>Nome: " . $this->nome . "<br>Salário: " . $this->salario;
        }

        public function AdicionarFilhos(Filhos $novoFilho){
            $this->vetFilhos[] = $novoFilho;
        }

        public function removerFilhoMaiorIdade($codigo){
            foreach($this->vetFilhos as $index=>$filho){
                if($codigo == $filho->getCodigo()){
                    if($filho->verificarMaiorIdade()){
                        unset($this->vetFilhos[$index]);
                        echo "<br>Filho removido com sucesso!";
                    } else {
                        echo "<br><br>Filho de menor idade, não é possível realizar a remoção!";
                    }
                }
            }
        }

        public function calcularTotalFilhos(){
            $totalFilhos = 0;
            for($i = 0; $i < sizeof($this->vetFilhos); $i++){
                $totalFilhos += 1;
            }
            return $totalFilhos;
        }

        public function listarDadosDosFilhos(){
            foreach($this->vetFilhos as $filho){
                $filho->mostrarDados() . "<br>";
            }
        }

        public abstract function calcularSalario($diasUteis);
    }
?>