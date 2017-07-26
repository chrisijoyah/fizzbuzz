<?php
namespace FizzBuzz;

class Step3 extends Step2
{
    /**
     * The total number of
     * 'fizz' occurrences.
     *
     * @var int
     */
    public $fizzCount = 0;

    /**
     * The total number of
     * 'buzz' occurrences.
     *
     * @var int
     */
    public $buzzCount = 0;

    /**
     * The total number of
     * 'fizzbuzz' occurrences.
     *
     * @var int
     */
    public $fizzBuzzCount = 0;

    /**
     * The total number of
     * 'lucky' occurrences.
     *
     * @var int
     */
    public $luckyCount = 0;

    /**
     * The total number of
     * integers.
     *
     * @var int
     */
    public $integerCount = 0;

    /**
     * Generate the output for
     * a given range of numbers.
     *
     * @param $from 'minimum' range value
     * @param $to 'maximum' range value
     * @return array
     */
    public function generateOutput($from, $to)
    {
        for ($i = $from; $i <= $to; $i++) {

            //Output 'lucky' for numbers containing 3
            if ($this->outputLuckyForNumbersContaining3($i)) {
                $this->output[] = $this->outputLuckyForNumbersContaining3($i);
                $this->luckyCount++; // Increment 'lucky' counter
                continue;
            }

            // Output 'fizzbuzz' if multiple of 15
            if ($this->outputFizzBuzzForMultiplesOf15($i)) {
                $this->output[] = $this->outputFizzBuzzForMultiplesOf15($i);
                $this->fizzBuzzCount++; // Increment 'fizzbuzz' counter
                continue;
            }

            // Output 'buzz' if multiple of 5
            if ($this->outputBuzzForMultiplesOf5($i)) {
                $this->output[] = $this->outputBuzzForMultiplesOf5($i);
                $this->buzzCount++; // Increment 'buzz' counter
                continue;
            }

            // Output 'fizz' if multiple of 3
            if ($this->outputFizzForMultiplesOf3($i)) {
                $this->output[] = $this->outputFizzForMultiplesOf3($i);
                $this->fizzCount++; // Increment 'fizz' counter
                continue;
            }

            // Output number id none of the conditions are met.
            $this->output[] = $i;
            $this->integerCount++; // Increment integer counter
        }

        // Return the output
        return $this->output;
    }

    /**
     * Display report.
     */
    public function displayReport()
    {
        echo "<br>";
        echo "fizz: {$this->fizzCount}<br>";
        echo "buzz: {$this->buzzCount}<br>";
        echo "fizzbuzz: {$this->fizzBuzzCount}<br>";
        echo "lucky: {$this->luckyCount}<br>";
        echo "integer: {$this->integerCount}<br>";
    }
}