<?php
use PHPUnit\Framework\TestCase;
include './src/Calculadora.php';

final class CalculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new Calculadora(3,5);
        $this->assertEquals(8, $calc->suma());
    }

    public function testMult()
    {
        $calc = new Calculadora(3,5);
        $this->assertEquals(14, $calc->mult());    
    }

    public function testDiv()
    {
        $calc = new Calculadora(4,2);
        $this->assertEquals(2, $calc->div()); 
        
    }

}
?>