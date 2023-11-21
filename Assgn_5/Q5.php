<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$mergedArray = array_map(null, $array1, $array2);
print_r($mergedArray);
?>