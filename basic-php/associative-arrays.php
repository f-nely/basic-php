<?php

$cars = [
    'Audi' => 50.500,
    'BMW' => 40.700,
    'Mercedes' => 60.300,
];

// var_dump($cars);

foreach ($cars as $key => $value) {
    echo "My {$key} has {$value} mileage <br>";
}
