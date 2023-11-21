<?php
$wordToFind = "text";
$fileContents = file_get_contents("Sample.txt");
$lines = explode("\n", $fileContents);
$lineNumber = 0;

foreach ($lines as $line) {
    $lineNumber++;
    if (strpos($line, $wordToFind) !== false) {
        echo "Word '$wordToFind' found on line $lineNumber<br>";
    }
}
?>