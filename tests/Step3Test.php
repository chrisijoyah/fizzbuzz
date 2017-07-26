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
}
