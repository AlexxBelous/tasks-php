<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















<?php
$sliced_students = array_slice($students, 1, 3);

foreach ($sliced_students as &$student) {
    $average_grade = array_sum($student[1]) / count($student[1]);
    $student['average'] = $average_grade;
}

unset($student);

usort($sliced_students, function($a, $b) {
    return $b['average'] <=> $a['average'];
});

foreach ($sliced_students as $student) {
    echo $student[0] . " - " . $student['average'] . "<br>";
}