<?php
function write_to_file($content) {
    $file = fopen("Sample.txt", "w");
    fwrite($file, $content);
    fclose($file);
}

write_to_file("This is a sample text to write into existing file.");
echo file_get_contents("Sample.txt");
?>