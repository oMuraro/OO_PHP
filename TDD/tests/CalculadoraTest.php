<?php
namespace tests;
use PHPUnit\Framework\TestCase;
use app\Calculadora;

class CalculadoraTest extends TestCase{
    public function test_soma(){
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);
        $resultado = $calc->soma(2,3);
        $this->assertEquals(5, $resultado);
    }

    public function test_multiplicacao(){
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);
        $resultado = $calc->multiplicacao(10,10);
        $this->assertEquals(100, $resultado);
    }

    public function test_divisao(){
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);
        $resultado = $calc->divisao(12,2);
        $this->assertEquals(6, $resultado);
    }

    public function test_subtracao(){
        $calc = new Calculadora();
        $this->assertInstanceOf(Calculadora::class, $calc);
        $resultado = $calc->subtracao(8,3);
        $this->assertEquals(5, $resultado);
    }

    public function test_if_operacoes_is_empty(){
        $calc = new Calculadora();
        $this->assertEmpty($calc->getOperacoes());
    }
}