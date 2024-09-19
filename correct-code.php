<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>



















































<?php

$abbreviations = ["FYI", "ASAP", "BTW", "IDK"];
$fullForms = ["For Your Information", "As Soon As Possible", "By The Way", "I Don’t Know"];
$expandedText = str_replace($abbreviations, $fullForms, $text);
echo $expandedText;