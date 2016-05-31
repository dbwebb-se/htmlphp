<?php
/**
 * Show off current day and day feeling.
 */
include "incl/is-friday.php"; 

// Get incoming
$day = isset($_GET["day"]) ? $_GET["day"] : null;

// Check incoming
// $day == null
// $day > 1 && < 8
$dateIsNull = is_null($day);
$validDate = $day >= 1 && $day <= 7;
if (!($dateIsNull || $validDate)) {
    die("No such day.");
}
/*
if (!is_null($day) && ($day < 1 || $day > 7)) {
    die("No such day.");
}*/

list($dayName, $dayFeeling) = isFriday($day);



?><!doctype html>
<meta charset="utf-8">
<title>Kom igång med PHP</title>

<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>

<style>
html {
    height: 100%;
}

body {
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: black;
    color: green;
    font-size: 300%;
    font-family: 'Indie Flower', cursive;
}

p {
    text-align: center;
}
</style>

<p>Yippekaye<?= $dayFeeling ?><br>Det är <?= $dayName ?></p>
