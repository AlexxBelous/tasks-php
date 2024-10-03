<?php
namespace App\Classes;


require_once __DIR__ . '/src/App/Functions/functions.php';
require_once __DIR__ . '/vendor/autoload.php';
//path database.php - src/App/Database/database.php

$students = require('src/App/Database/database.php');
