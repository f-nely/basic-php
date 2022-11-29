<?php

$x = 10;
$y = 20;

function myFunction(int $y): int
{
    return $y;
}

echo myFunction($y);