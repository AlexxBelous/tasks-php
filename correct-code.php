<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */



















function getQueryString($url) {
    $parsed_url = parse_url($url);
    return isset($parsed_url['query']) ? $parsed_url['query'] : '';
}

echo getQueryString($url);