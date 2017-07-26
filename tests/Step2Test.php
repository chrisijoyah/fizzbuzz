<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\Step2;

class Step2Test extends TestCase
{
    /**
     * Test to ensure numbers containing 3 output 'lucky'.
     */
    public function testNumbersContaining3OutputLucky()
    {
        // Create a new instance of Step2
        $step2 = new Step2;

        // Test random numbers containing 3 output 'lucky'
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(35262));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(15783));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(26353));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(896653));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(453665));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(513));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(68373));
        $this->assertSame('lucky', $step2->outputLuckyForNumbersContaining3(300));
    }

    /**
     * Test to see if output matches expected results.
     */
    public function testOutputMatchesExample()
    {
        // Define expected results
        $expectedResult = [1, 2, 'lucky', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 'lucky', 14, 'fizzbuzz', 16, 17, 'fizz', 19, 'buzz'];

        // Create new instance of Step 1
        $step2 = new Step2;

        //Initialize test data
        $step2->generateOutput(1, 20);

        // Test to see if expected results match the output.
        $this->assertSame($expectedResult, $step2->output);
    }
}
