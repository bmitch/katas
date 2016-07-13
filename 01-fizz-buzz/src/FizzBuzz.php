<?php

class FizzBuzz
{
    public function execute($number)
    {
        $result = '';

        if ($this->isMultipleOfThree($number)) {

            $result = "Fizz";
        }

        if ($this->isMultipleOfFive($number)) {

            $result .= "Buzz";
        }

        $result = !empty($result) ? $result : $number;

        return $result;
    }

    private function isMultipleOfThree($number)
    {
        // your turn to write some code
    }

    private function isMultipleOfFive($number)
    {
        // your turn to write some code
    }
}
