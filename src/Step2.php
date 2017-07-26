<?php
namespace FizzBuzz;

class Step2 extends Step1
{
    /**
     * Output 'lucky' for numbers
     * containing 3.
     *
     * @param $integer
     * @return string
     */
    public function outputLuckyForNumbersContaining3($integer)
    {
        if (preg_match('/3/', $integer)) {
            return 'lucky';
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

            //Output 'lucky' for numbers containing 3
            if ($this->outputLuckyForNumbersContaining3($i)) {
                $this->output[] = $this->outputLuckyForNumbersContaining3($i);
                continue;
            }

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

        // Return the output
        return $this->output;
    }
}