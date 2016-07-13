<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('FizzBuzz');
    }

	function it_translates_1_for_fizzbuzz()
    {
        $this->execute(1)->shouldReturn(1);
    }

    function it_translates_3_to_fizz()
    {
        $this->execute(3)->shouldReturn('Fizz');
    }
}
