<?php
    
$num1 = $_POST["numBox1"];
$num2 = $_POST["numBox2"];
$operation = $_POST["operationBox"];

$result = "Error! Your data is NULL.";

try {
    $result = "$num1 $operation $num2 = " . eval("return $num1 $operation $num2;");
}
finally {
    echo $result;
}

?>