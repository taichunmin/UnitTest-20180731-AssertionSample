<?php

namespace AssertionSample;

class Calculator
{
    public function divide(float $first, float $second) : float
    {
        if ($second == 0) {
            throw new DivisionZeroException;
        }

        return $first / $second;
    }
}
