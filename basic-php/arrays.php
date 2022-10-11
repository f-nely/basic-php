<?php

$cars = ['BMW', 'Audi', 'Marcedes'];

$myCar = ['Audi', 2015, 75.304];
var_dump($myCar);

$cars2 = ['Volve', 'Chevy', 'Volkswagen'];
$cars = array_merge($cars, $cars2);

foreach ($cars as $car) {
    echo $car . '<br>';
}

