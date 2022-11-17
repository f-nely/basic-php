<?php

// function-with-arguments

function calculator(int|float $num1, int|float $num2): int|float
{
    return $num1 * $num2;
}

echo calculator(5, 5);