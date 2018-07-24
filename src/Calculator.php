<?php

namespace AssertionSample;

class Calculator
{
    public function divide($first, $second)
    {
        if ($second == 0) {
            throw new DivisionZeroException;
        }

        return $first / $second;
    }
}
