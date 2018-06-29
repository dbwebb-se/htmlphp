<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



$a = "42 är svaret.";
$b = "1337 små grisar.";
$c = "Det finns 1 moped.";
$d = "";

echo "'$a' (", gettype($a), ") get integer value: ", intval($a), "\n";
echo "'$b' (", gettype($b), ") get integer value: ", intval($b), "\n";
echo "'$c' (", gettype($c), ") get integer value: ", intval($c), "\n";
echo "'$d' (", gettype($d), ") get integer value: ", intval($d), "\n";



include(__DIR__ . "/footer.php");
