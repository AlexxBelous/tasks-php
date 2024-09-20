<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















<?php
//namespace App\TextProcessor;
class TextProcessor
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;

    }
    public function truncate(int $wordLimit)
    {
        $words = explode(' ', $this->text);
        if (count($words) > $wordLimit) {
            $words = array_slice($words, 0, $wordLimit);
        }
        return implode(' ', $words) . '...';
    }
}