<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















<?php

$array1 = [1, 3, 5, 7, 9];
$array2 = [2, 3, 6, 7, 10];


function findMatchingNumbers($array1, $array2)
{
    $matchingNumbers = array_intersect($array1, $array2);
    if (!empty($matchingNumbers)) {
        echo "Matching numbers: " . implode(", ", $matchingNumbers);
    } else {
        echo "No matching numbers found.";
    }
}
findMatchingNumbers($array1, $array2);
