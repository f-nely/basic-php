<?php

// Conditional statement
$age = 20;

if ($age < 20) {
    echo 'Sorry, you are too young!';
} else if ($age > 50) {
    echo 'You are too old to party!';
} else if ($age > 18 && $age < 21) {
    echo 'You are not allowed to drink!';
} else {
    echo 'You are old enough to go out!';
}