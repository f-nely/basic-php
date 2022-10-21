<?php

/*
    Foreach loop - iterate over array variables
*/

$cars = ['Jetta', 'S10', 'Amarok', 'Cronos', 'Jeep Compass', 'Renegade', 'KWID'];

foreach ($cars as $car) {
    echo $car . '<br>';
}

echo '<hr>';

$person = [
    'name' => 'Dary',
    'age' => 30,
    'gender' => 'male',
];

foreach ($person as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}