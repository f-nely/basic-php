<?php

/*
    For loop

    Intialization
    Evaluted once at the beginning
    
    Condition
    Option 1 - if its thue, execute
    Option 2 - if its false, stop
    
    Counter
    Evaluated at the end of every loop
*/

$car = ['Jetta', 'S10', 'Amarok', 'Cronos', 'Jeep Compass'];

for ($i = 0; $i < count($car); $i++) {
    echo $car[$i] . '<br>';
}

/*
    Challenge

    Goint to the bank on the 1st of January
    want to deposit 1000 dollars.
    Interest rate is 5%
    withrawl it after 5 years
*/

$deposit = 1000;
$interest = 0.05;

for ($years = 1; $years <= 5; $years++) {
    $deposit += ($deposit * $interest);
    echo 'The total amount after ' . $years . ' year is ' . $deposit . '<br>';
}