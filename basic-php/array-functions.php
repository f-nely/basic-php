<?php

// Array functions

$personalInfo = [
    'Name' => 'Dary',
    'Age' => 24,
    'City' => 'Amsterdam',
];

$moreInfo = [
    'State' => 'NH',
    'Weight' => 85,
];

// Merge arrays
$personalInfo = array_merge($personalInfo, $moreInfo);

foreach ($personalInfo as $key => $value) {
    echo "{$key} : {$value} <br>";
}

echo '<pre>';
print_r($personalInfo);

// Print only keys
print_r(array_keys($personalInfo));

// Print only values
print_r(array_values($personalInfo));

$cars = ['Volkswagen', 'Audi', 'Mercedes'];
// Add value in array
array_push($cars, 'Volvo');
print_r($cars);

// Search inside of an array
echo '<br>';
echo array_search('Mercedes', $cars);

// Count the number of items in an array
echo '<br>';
echo count($cars);