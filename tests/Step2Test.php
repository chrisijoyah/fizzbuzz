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
}
