<?php

use PHPUnit\Framework\TestCase;
use FizzBuzz\Step3;

class Step3Test extends TestCase
{
    public function testReport()
    {
        // Create new instance of step 3
        $step3 = new Step3();

        // Generate test data
        $step3->generateOutput(1, 20);

        // Test the occurrences match the expected output.
        $this->assertSame($step3->fizzCount, 4);
        $this->assertSame($step3->buzzCount, 3);
        $this->assertSame($step3->fizzBuzzCount, 1);
        $this->assertSame($step3->luckyCount, 2);
        $this->assertSame($step3->integerCount, 10);

    }

    /**
     * Test to see if output matches expected results.
     */
    public function testOutputMatchesExample()
    {
        // Define expected results
        $expectedResult = [1, 2, 'lucky', 4, 'buzz', 'fizz', 7, 8, 'fizz', 'buzz', 11, 'fizz', 'lucky', 14, 'fizzbuzz', 16, 17, 'fizz', 19, 'buzz'];

        // Create new instance of Step 1
        $step3 = new Step3;

        //Initialize test data
        $step3->generateOutput(1, 20);

        // Test to see if expected results match the output.
        $this->assertSame($expectedResult, $step3->output);
    }
}
