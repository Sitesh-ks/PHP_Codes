<?php
$file = 'Sample.txt';
$current = "<br>New content to append.";
file_put_contents($file, $current, FILE_APPEND);
echo file_get_contents($file);
?>