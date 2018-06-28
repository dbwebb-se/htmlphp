<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



$pi = pi();
$square = sqrt(2);

echo round($pi, 2), "\n";
echo round($square, 2), "\n";

echo floor($pi), "\n";
echo floor($square), "\n";

echo ceil($pi), "\n";
echo ceil($square), "\n";



include(__DIR__ . "/footer.php");
