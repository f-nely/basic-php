<?php

/*
    Logical operators

    AND -- Both X and Y are true
    &&  -- Both X and Y are true
    OR  -- Either X or Y are true
    ||  -- Either X or Y are true
    XOR -- Either X or Y are true, not both
    !   -- True if X is not true 
*/

$x = 5;
$y = 10;

if ($x == $y && 1 == 1) {
    echo 'True!';
} else {
    echo 'False!';
}