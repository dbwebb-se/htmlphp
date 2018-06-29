<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



$a = "42 är svaret.";
$b = "1337 små grisar.";
$res = $a . $b;
echo $res, "\n";

$res = $a + $b;
echo $res, "\n";

$res = $a - $b;
echo $res, "\n";



include(__DIR__ . "/footer.php");
