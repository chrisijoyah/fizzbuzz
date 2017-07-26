<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\Step1;

class Step1Test extends TestCase
{
    /**
     * Test to ensure multiples of 3 output 'fizz'.
     */
    public function testMultiplesOf3OutputFizz()
    {
        // Create new instance of Step1
        $step1 = new Step1();

        // Tests for multiples of 3 over a range of 1 - 100
        for ($i = 0; $i <= 100; $i++) {
            if ($i % 3 === 0) {
                $this->assertSame('fizz', $step1->outputFizzForMultiplesOf3($i));
            }
        }
    }

    /**
     * Test to ensure multiples of 5 output 'buzz'.
     */
    public function testMultiplesOf5OutputBuzz()
    {
        // Create new instance of Step1
        $step1 = new Step1;

        // Tests for multiples of 5 over a range of 1 - 100
        for ($i = 0; $i <= 100; $i++) {
            if ($i % 5 === 0) {
                $this->assertSame('buzz', $step1->outputBuzzForMultiplesOf5($i));
            }
        }
    }

    /**
     * Test to ensure multiples of 15 output 'fizzbuzz'.
     */
    public function testMultiplesOf15OutputFizzBuzz()
    {
        // Create new instance of Step 1
        $step1 = new Step1;

        // Tests for multiples of 15 over a range of 1 - 100
        for ($i = 0; $i <= 100; $i++) {
            if ($i % 15 === 0) {
                $this->assertSame('fizzbuzz', $step1->outputFizzBuzzForMultiplesOf15($i));
            }
        }
    }

    /**
     * Test to see if output matches expected results.
     */
    public function testOutputMatchesExample()
    {
        // Define expected results
        $expectedResult = [1, 2, 'fizz', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 13, 14, 'fizzbuzz', 16, 17, 'fizz', 19, 'buzz'];

        // Create new instance of Step 1
        $step1 = new Step1;

        //Initialize test data
        $step1->generateOutput(1, 20);

        // Test to see if expected results match the output.
        $this->assertSame($expectedResult, $step1->output);
    }
}
