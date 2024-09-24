<?php

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testCuandoLeDoyNumeroTresMeDevuelveFizz() : void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(3);

        $this->assertEquals("Fizz", $resultado);
    }

    public function testCuandoLeDoyNumeroCincoMeDevuelveBuzz() : void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(5);

        $this->assertEquals("Buzz", $resultado);
    }

    public function testCuandoLeDoyNumeroQuinceMeDevuelveFizzBuzz() : void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(15);

        $this->assertEquals("FizzBuzz", $resultado);
    }

    public function testCuandoLeDoyNumeroUnoMeDevuelveUno() : void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(1);

        $this->assertEquals(1, $resultado);
    }

    public function casosDeUso(): array
    {
        return [
            [3, "Fizz"],
            [5, "Buzz"],
            [15, "FizzBuzz"],
            [1,1]
        ];
    }

    /**
     * @dataProvider casosDeUso
     */
    public function testFizzBuzz($numeroATestear, $resultadoEsperado)
    {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero($numeroATestear);

        $this->assertEquals($resultadoEsperado, $resultado);
    }
}