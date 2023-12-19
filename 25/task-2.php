<?php

$countryToCapitalArr = ["Belarus" => "Minsk", "Ukraine" => "Kiev", "China" => "Pekin"];

{
    $country = $_POST["countryBox"];
    $capital = $_POST["capitalBox"];
    $sortType = $_POST["sortTypeBox"];

    if ($country != null && $capital != null) {
        $countryToCapitalArr[$country] = $capital;
    }

    if ($sortType == "key") {
        ksort($countryToCapitalArr);
    }

    if ($sortType == "value") {
        asort($countryToCapitalArr);
    }
    
    $countryToCapitalStr = "";

    foreach ($countryToCapitalArr as $countryKey => $capitalVal) {
        $countryToCapitalStr .= $countryKey . " => " . $capitalVal . "<br/>";
    }


    echo ($countryToCapitalStr);
}

?>