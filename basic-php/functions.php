<?php

$num1 = 10;
$num2 = 15;

function add(int $num1, int $num2): int
{
    return $num1 + $num2;
}

echo 'The number is: ' . add($num1, $num2);

function subtract(int $num1, int $num2): int
{
    return $num1 - $num2;
}

echo '<br>';
echo 'The number is: ' . subtract($num1, $num2);
echo '<br>';

// Pass by reference
$x = 10;

function addByValue(int $x)
{
    $x += 5;
}

function addByReference(int &$x)
{
    $x += 10;
}

addByValue($x);
echo 'The value is: ' . $x;

echo '<br>';

addByReference($x);
echo 'The value is: ' . $x;