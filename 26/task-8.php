<?php

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$dateInput = $data["#dateBox"];

$dayOfWeek = date("l", strtotime($dateInput));
echo $dayOfWeek;