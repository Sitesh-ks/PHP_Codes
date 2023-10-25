<?php
function convertDaysToYearsMonthsDays($days)
{
    $years = floor($days / 365);
    $remainder = $days % 365;
    $months = floor($remainder / 30);
    $days = $remainder % 30;

    echo "Years: " . $years . "<br>";
    echo "Months: " . $months . "<br>";
    echo "Days: " . $days . "<br>";
}
$days=100;
echo"No. of days : " . $days."<br>";
convertDaysToYearsMonthsDays($days);
?>