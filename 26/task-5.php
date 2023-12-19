<?php

$file1Path = "task-5/file1.txt";
$file2Path = "task-5/file2.txt";

$textFromFile1 = file_get_contents($file1Path);
$textFromFile2 = file_get_contents($file2Path);

$textFile1 = fopen($file1Path, "w");
$textFile2 = fopen($file2Path, "w");

fwrite($textFile1, $textFromFile2);
fwrite($textFile2, $textFromFile1);

echo "File 1 and File 2 has been swapped";