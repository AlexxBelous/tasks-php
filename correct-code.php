<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */



















$parsed_url = parse_url($url);
$path = isset($parsed_url['path']) ? $parsed_url['path'] : 'element do not found';

echo $path;