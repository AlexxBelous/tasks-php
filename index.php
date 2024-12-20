<?php
use App\UrlFilter\UrlFilter;

require_once __DIR__ . '/src/App/Functions/functions.php';
require_once __DIR__ . '/vendor/autoload.php';
//path database.php - src/App/Database/database.php


$urls = require('src/App/Database/database.php');

$allowedDomains = ['example.com', 'mysite.com'];


