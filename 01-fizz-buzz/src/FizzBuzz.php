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
        return ($number % 3 == 0);
    }

    private function isMultipleOfFive($number)
    {
        return ($number % 5 == 0);
    }
}
