<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















<?php

$a = 10;
$b = 5;

$operations = [
    'add' => function ($a, $b) {
        return $a + $b;
    },
    'subtract' => function ($a, $b) {
        return $a - $b;
    },
    'multiply' => function ($a, $b) {
        return $a * $b;
    },
    'divide' => function ($a, $b) {
        return $b != 0 ? $a / $b : "Error: Division by zero!";
    }
];

$operation = "add";

if (array_key_exists($operation, $operations)) {
    $result = call_user_func($operations[$operation], $a, $b);
    echo "Result: $result";
} else {
    echo "Error: Unknown operation!";
}

