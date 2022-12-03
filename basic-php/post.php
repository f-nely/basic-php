<?php

/*
    POST
    Collect data from the HTML form (invisible)
*/

var_dump($_POST);

if (isset($_POST)) {
    echo $_POST['name '] . ' your form is subimitted!';
}

