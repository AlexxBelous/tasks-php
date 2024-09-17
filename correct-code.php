<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */



















function replaceWords(string $inputComment, array $badWords): string
{
    if (empty($badWords) || empty($inputComment)) {
        return $inputComment;
    }

    usort($badWords, fn($a, $b) => strlen($b) <=> strlen($a));

    foreach ($badWords as $badWord) {
        $replacement = str_repeat('*', strlen($badWord));
        $inputComment = str_replace($badWord, $replacement, $inputComment);
    }

    return $inputComment;
}
