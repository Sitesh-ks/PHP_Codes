<?php
function count_contiguous_substrings($str)
{
    $count = 0;
    $length = strlen($str);

    for ($i = 0; $i < $length; $i++) {
        for ($j = $i; $j < $length; $j++) {
            if ($str[$i] === $str[$j]) {
                $count++;
            }
        }
    }

    return $count;
}

$S = "abca";
$result = count_contiguous_substrings($S);
echo $result;

?>