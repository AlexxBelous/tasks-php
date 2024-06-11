<?php
namespace App\Classes;
require_once __DIR__ . '/src/App/Functions/functions.php';
require_once __DIR__ . '/vendor/autoload.php';
//path database.php - src/App/Database/database.php

$users = require('src/App/Database/database.php');

?>

<ul>
    <li style="margin-bottom: 25px; list-style: none">
        <strong>Name:</strong> <br>
        <strong>Email:</strong> <br>
        <strong>Age:</strong> <br>
        <strong>City:</strong> <br>
        <strong>Country:</strong> <br>
    </li>
</ul>







