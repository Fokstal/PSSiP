<?php
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $line = $data["#lineBox"];
    $lineInArr = str_split($line, 1);
    $charToFind = $data["#charToFindBox"];

    $countCharInLine = 0;

    foreach ($lineInArr as $char) {
        if ($char == $charToFind) {
            $countCharInLine++;
        }
    }

    echo "Count on [$charToFind] in [$line] = $countCharInLine"
?>
