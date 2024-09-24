<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















<?php
//namespace App\NumberComparator;

class NumberComparator
{
    private array $array1;
    private array $array2;
    private array $matchingNumbers = [];

    public function __construct(array $array1, array $array2)
    {
        $this->array1 = $array1;
        $this->array2 = $array2;
    }

    private function findMatches(): void
    {
        $this->matchingNumbers = array_intersect($this->array1, $this->array2);
    }

    public function displayMatches(): void
    {
        $this->findMatches();
        if (!empty($this->matchingNumbers)) {
            echo "Matching numbers: " . implode(', ', $this->matchingNumbers);
        } else {
            echo "No matching numbers found.";
        }
    }
}

