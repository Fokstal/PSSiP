<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clientData = json_decode(file_get_contents('php://input'), true);
    $array = explode(' ', $clientData['array']);
    $output = "";

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == 0) {
            $output .= $i . " ";
        }
    }

    echo json_encode($output);
}
?>