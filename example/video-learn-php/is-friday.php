<!doctype html>
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

<?php include "incl/is-friday.php"; ?>

<p>Yippekaye<?= $dayFeeling ?><br>Det är <?= $dayName ?><?= $dayFeeling ?></p>
