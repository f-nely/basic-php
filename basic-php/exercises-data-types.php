<?php

// exercise 1
$n1 = 8;
$n2 = 7;

$total = ($n1 + $n2) * 5;
echo 'The total is ' . $total . '<br>';
echo '<hr>';

// exercise 2
$price = 100;
$vat = 0.21;

$totalPrice = ($price * $vat) + $price;
echo 'Price: ' . $price . '<br>';
echo 'VAT: ' . $vat . '<br>';
echo 'Total price: ' . $totalPrice . '<br>';
echo '<hr>';

// exercise 3
$x = 4;
$y = 9;
$z = 4;

$average = ($x + $y + $z) / 3;

echo 'The average is ' . number_format($average, 2) . '<br>';
// echo round($average, 1);
echo '<hr>';

// exercise 4
$countries = [
    'Netherlands' => 'Amsterdan',
    'Germany' => 'Berlin',
    'Thailand' => 'Bangkok',
    'Denmark' => 'Copenhagen',
    'Canada' => 'Toronto',
];

foreach ($countries as $key => $value) {
    echo 'The capital of ' . $key . ' is ' . $value . '<br>';
}
echo '<hr>';

// exercise 5
$cm = 150;
$cmToInch = $cm * 0.39;

echo $cm . ' centimeters is ' . $cmToInch . ' inch' . '<br>';
echo '<hr>';

// exercise 6
$expenses = [40, 70, 20, 85, 40];

$totalAmount = 0;
$amountOfExpenses = 0;

foreach ($expenses as $expense) {
    $totalAmount += $expense;
    $amountOfExpenses++;
}

echo 'My ' . $amountOfExpenses . ' biggest expenses were ' . $totalAmount;
echo '<hr>';

// exercise 7
$weather = ['Rain', 'Sunshine', 'Clounds', 'Hail', 'Sleet', 'Snow', 'Wind'];

echo 'We\'ve seen all kinds of weather this month. At the beginning of the 
month, we had ' . $weather[5] . ' and ' . $weather[6] . ' Then came ' . 
$weather[1] . ' with a few ' . $weather[2] . ' and some ' . $weather[0] . 
' At least we didn\'t get any ' . $weather[3] . ' or ' . $weather[4] . '.';