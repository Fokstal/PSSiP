<?php

$russiaAlphabet = "А Б В Г Д Е Ё Ж З И Й К Л М Н О П Р С Т У Ф Х Ц Ч  Ч Ш Щ Ъ Ы Ь Э Ю Я";
$filePath = "task-4/russia-alphabet.txt";

$fileTxt = fopen($filePath, "w+");

fwrite($fileTxt, $russiaAlphabet);

$result = file_get_contents($filePath);

fclose($fileTxt);

echo $result;
