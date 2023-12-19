<?php

$num1 = $_POST["numBox1"];
$num2 = $_POST["numBox2"];
$num3 = $_POST["numBox3"];

$numbers = [$num1, $num2, $num3];

sort($numbers);

if ($numbers[2] ** 2 == $numbers[1] ** 2 + $numbers[0] ** 2) {
    echo "Pifagor!";

    return;
}

echo "Pigator is not found.";

?>