<?php
    $asciiTable = [];

    $code = 0;
    for ($i = 0; $i < 17; $i++) {
        for ($j = 0; $j < 9; $j++) {
            $asciiTable[$i][$j] = chr($code);
            $code++;
        }
    }

    print_r($asciiTable);
?>