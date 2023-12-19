<?php
    $a = $_POST["aBox"];
    $b = $_POST["bBox"];
    $c = $_POST["cBox"];

    $D = $b ** 2 - 4 * $a * $c;
    $result = "Root is not found.";

    if ($D == 0) {
        $result = -1 * $b / 2 * $a;
    }

    if ($D > 0) {
        $root1 = (-1 * $b + sqrt($D)) / 2 * $a;
        $root2 = (-1 * $b - sqrt($D)) / 2 * $a;

        $result = "$root1 / $root2";
    }

    echo "D = $D. His roots are $result";
?>