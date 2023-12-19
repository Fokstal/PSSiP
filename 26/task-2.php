<?php
$json = file_get_contents('php://input');
$data = json_decode($json, true);

$typeCase = $data["input[name=caseLineRadio]:checked"];
$line = $data["#lineCaseBox"];
$resultLine = "";

switch ($typeCase) {
    case "upperCase": {
            $resultLine = mb_strtoupper($line);
            break;
        }
    case "lowerCase": {
            $resultLine = mb_strtolower($line);
            break;
        }
    case "specialCase": {
            for ($i = 0; $i < strlen($line); $i++) {
                if ($i % 2 == 1) {
                    $resultLine .=  mb_strtolower($line[$i]);
                }

                if ($i % 2 == 0) {
                    $resultLine .=  mb_strtoupper($line[$i]);
                }
            }

            break;
        }
}

echo $resultLine;
