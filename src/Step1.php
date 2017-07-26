<?php
namespace FizzBuzz;

class Step1
{
    /**
     * Stores the output.
     *
     * @var array
     */
    public $output = [];

    /**
     * Output 'fizz' for numbers that
     * are multiples of 3.
     *
     * @param $integer
     * @return string
     */
    public function outputFizzForMultiplesOf3($integer)
    {
        if ($integer % 3 === 0) {
            return 'fizz';
        }
    }

    /**
     * Output 'buzz' for numbers that
     * are multiples of 5.
     *
     * @param $integer
     * @return string
     */
    public function outputBuzzForMultiplesOf5($integer)
    {
        if ($integer % 5 === 0) {
            return 'buzz';
        }
    }

    /**
     * Output 'fizzbuzz' for numbers that
     * are multiples of 15.
     *
     * @param $integer
     * @return string
     */
    public function outputFizzBuzzForMultiplesOf15($integer)
    {
        if ($integer % 15 === 0) {
            return 'fizzbuzz';
        }
    }

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

            // Output 'fizzbuzz' if multiple of 15
            if ($this->outputFizzBuzzForMultiplesOf15($i)) {
                $this->output[] = $this->outputFizzBuzzForMultiplesOf15($i);
                continue;
            }

            // Output 'buzz' if multiple of 5
            if ($this->outputBuzzForMultiplesOf5($i)) {
                $this->output[] = $this->outputBuzzForMultiplesOf5($i);
                continue;
            }

            // Output 'fizz' if multiple of 3
            if ($this->outputFizzForMultiplesOf3($i)) {
                $this->output[] = $this->outputFizzForMultiplesOf3($i);
                continue;
            }

            // Output number id none of the conditions are met.
            $this->output[] = $i;
        }

        return $this->output;
    }

    /**
     * Display the output to screen.
     *
     * @return string
     */
    public function displayOutput()
    {
        echo implode(" ", $this->output);
        return;
    }
}