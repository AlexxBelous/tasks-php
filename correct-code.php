<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















<?php

$existingSlugs = array_column($posts, 'slug');

$slug = $newPost['slug'];


if (in_array($slug, $existingSlugs)) {
    $counter = 1;
    while (in_array($slug . '-' . $counter, $existingSlugs)) {
        $counter++;
    }
    $slug = $slug . '-' . $counter;
    $newPost['slug'] = $slug;
}
$posts[] = $newPost;