<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

echo "<p>Incoming<pre>";
var_dump($_SESSION);

// +1
$number = $_SESSION["number"] ?? 0;
$number++;
$_SESSION["number"] = $number;


// The game
$serie = $_SESSION["serie"] ?? [];
$dice = rand(1, 6);
echo "Tärningen visar en $dice\n";
if ($dice !== 1) {
    $serie[] = $dice;
    var_dump($serie);
} else {
    $serie = [];
}

// Ensure save to session
$_SESSION["serie"] = $serie;
$_SESSION["sum"] = array_sum($serie);





echo "</pre><hr><p>Outgoing<pre>";
var_dump($_SESSION);
