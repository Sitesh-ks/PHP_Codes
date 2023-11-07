<?php
function canVote($age) {
    if ($age >= 18) {
        return "Enjoy your voting rights 😉.";
    } else {
        return "Grow up kid be at least 18 years old to cast vote.";
    }
}

$age = 20;
echo "Your current age : ".$age,"<br>";
echo canVote($age);
$age = 12;
echo"<br>";
echo "Your current age : ".$age,"<br>";
echo canVote($age);
?>