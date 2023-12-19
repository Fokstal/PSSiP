<?php
    session_start();

    $answerFileTxt = "asnwers.txt";

    $answer = $_POST["answerRadioBox"];
    $numberOfQuestion = $_POST["numberQuestionBox"];

    $_SESSION["answer"] .= $answer;

    if ($numberOfQuestion == 4) {
        $emailFromSession = $_SESSION["email"];
        $result = $_SESSION["answer"];
        $answerToResult = file_get_contents("answer-to-result.txt");

        echo "
            $emailFromSession, your result is <b>$result</b>
            <hr>
            <br>
            $answerToResult
        ";

        unset($_SESSION["answer"]);
        return;
    }

    $numberOfQuestion++;

    header("Location: question-$numberOfQuestion.html");
?>