
<?php
$filename = 'Sample.txt';
$linecount = 0;
$handle = fopen($filename, 'r');
while (!feof($handle)) {
    $line = fgets($handle);
    $linecount++;
}
fclose($handle);
echo "Total number of lines are: " . $linecount;
?>