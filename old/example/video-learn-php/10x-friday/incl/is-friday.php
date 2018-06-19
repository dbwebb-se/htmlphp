<?php 

$day = date("w");
$day = 5;

$dayName = "";
$dayFeeling = "...";

if ($day == 1) {
    $dayName = "måndag";
} elseif ($day == 2) {
    $dayName = "tisdag";
} elseif ($day == 5) {
    $dayFeeling = "!!!";
    $dayName = "fredag";
}


//echo "<p>Idag är det dagen nummer $day.";

/*
$monday = 1;
$friday = 5;

if ($day == $monday) {
    echo "<p>Yippekaye ... Det är måndag idag...";
} elseif ($day == $friday) {
    echo "<p>Yippekaye ... Det är fredag idag!!!";
}
*/
/*
if ($day == $monday) {
    echo "<p>Yippekaye ... Det är måndag idag...";
}

//$day = 5;

if ($day == $friday) {
    echo "<p>Yippekaye ... Det är fredag idag!!!";
}
*/
