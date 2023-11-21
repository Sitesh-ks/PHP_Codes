<?php
$old_file_name = "Sample1.txt";
$new_file_name = "Sample2.txt";

if (file_exists($old_file_name)) {
    rename($old_file_name, $new_file_name);
    echo "File renamed successfully.";
} else {
    echo "File does not exist.";
}
?>