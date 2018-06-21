<?php

namespace spec\App;

use App\Calculator;
use PhpSpec\ObjectBehavior;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }

    function it_can_sum()
    {
        $this->sum(1, 3)
            ->shouldBeEqualTo(4);
    }
}
