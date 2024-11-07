<?php

namespace App\Classes;


require_once __DIR__ . '/src/App/Functions/functions.php';
require_once __DIR__ . '/vendor/autoload.php';
//path database.php - src/App/Database/database.php

$posts = require('src/App/Database/database.php');

$newPost = [
    "id" => 30,
    "title" => "My test title for slug",
    "slug" => "my-test-title-for-slug",
    "excerpt" => "A look into the world of subatomic particles.",
    "content" => "This field challenges our understanding of reality, revealing that particles can exist in multiple states at once. Quantum physics explores the behavior of particles at the smallest scales."
];




















