<?php

// Conditional statement - switch
$role = 'Employee';

switch ($role) {
    case 'Visitor':
        echo 'Welcome Visitor!';
        break;
    case 'Admin';
        echo 'Welcome Admin!';
        break;
    case 'Superadmin':
        echo 'Welcome Superadmin!';
        break;
    case 'Boss':
        echo 'Welcome Boss!';
        break;
    default:
        echo 'Welcome Employee!';
}
