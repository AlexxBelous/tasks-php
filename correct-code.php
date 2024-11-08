<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



































<?php
function generateSlug($title)
{
    $slug = strtolower(trim(preg_replace('#[^A-Za-z0-9]+#','-', $title),'-'));
    return preg_replace('#-+#', '-', $slug);
}


function addSlugsToPosts(array $posts)
{
    foreach ($posts as &$post) {
        if (empty($post['slug']) && isset($post['title'])) {
            $post['slug'] = generateSlug($post['title']);
        }
    }
    return $posts;
}


dump($posts);