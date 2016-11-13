<?php

namespace spec\Checkout;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
		$this->beConstructedWith('A', 50);
        $this->shouldHaveType('Checkout\Item');
    }

    function it_has_a_sku()
    {
		$this->beConstructedWith('A', 50);
        $this->sku()->shouldReturn('A');
    }

    function it_has_a_price()
    {
		$this->beConstructedWith('A', 50);
        $this->price()->shouldReturn(50);
    }
}
