<?php

namespace spec\Acme;

use Acme\Calculator;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Calculator::class);
    }
}
