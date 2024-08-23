<?php
    class Departamento{
        private $codigo;
        private $nome;
        private $vetorFuncionarios;

        public function __construct($codigo, $nome){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->vetorFuncionarios = [];
        }

        public function mostrarAtributos(){
            echo "<br>Código: " . $this->codigo . "<br>Nome do Departamento: " . $this->nome;
            echo "<br>";
            foreach($this->vetorFuncionarios as $funcionario){
                $funcionario->showAttribute();
            }
        }

        public function admitirFuncionario(Funcionario $novoFuncionario){
            $this->vetorFuncionarios[] = $novoFuncionario;
        }

        public function listarDadosFuncionarios(){
            foreach($this->vetorFuncionarios as $funcionario){
                $funcionario->showAttribute();
            }
        }

        public function demitirFuncionario($codigoFuncionario){
            foreach($this->vetorFuncionarios as $funcionario){
                if($codigoFuncionario == $funcionario->getCodigo()){
                    unset($this->vetorFuncionarios[$codigoFuncionario]);
                }
            }
        }

        public function calcularFolhaPagamento($diasUteis){
            $folhaPagamento = 0;
            foreach($this->vetorFuncionarios as $funcionario){
                $folhaPagamento += $funcionario->calcularSalario($diasUteis);
            }
            return $folhaPagamento;
        }

        public function mostrarQtdeFilhosPorFuncionario(){
            foreach($this->vetorFuncionarios as $funcionario){
                echo "<br><br>Dados dos Filhos do Funcionario: ";
                $funcionario->ListarDadosDosFilhos();
            }
        }
    }
?>