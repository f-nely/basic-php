<?php

// String functions

// String length
$str = 'Today is a sunny day';
echo strlen($str);

// String word count
$firstName = 'My first name is Dary';
echo '<br>';
echo str_word_count($firstName);
echo '<br>';

// How to find text within a string
$email = 'info@darynazar.com';
if (strpos($email, '@')) {
    echo 'This is a valid email';
} else {
    echo 'This is a email input field!';
}

// Ucwords - every first letter of a word is uppercase 
echo '<br>';
echo ucwords('what is your name?');

// Whole string to uppercase 
echo '<br>';
echo strtoupper('what is your name?');