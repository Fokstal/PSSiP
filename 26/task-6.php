<?php

$lineFromFile = file_get_contents("task-6/fileWithChars.txt");
$countChrInLine = [];

foreach (str_split($lineFromFile, 1) as $chr) {
    if (!array_key_exists($chr, $countChrInLine)) {
        $countChrInLine[$chr] = 0;
    }

    $countChrInLine[$chr]++;
}

print_r(($countChrInLine));