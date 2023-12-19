<?php

session_start();

$_SESSION["login"] = $_POST["loginBox"];
$_SESSION["email"] = $_POST["emailBox"];
$_SESSION["password"] = $_POST["passwordBox"];
$_SESSION["age"] = $_POST["ageBox"];
$_SESSION["fio"] = $_POST["fioBox"];
$_SESSION["sex"] = $_POST["sexBox"];
$_SESSION["answer"] = "";

$fileTxt = fopen("user-data.txt", "w+");

fwrite($fileTxt, json_encode($_SESSION));
fclose($fileTxt);

header("Location: question-1.html");

?>