<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



$a = 42;
$b = 42;
$res = ($a == $b);
echo "$a == $b ger ", ($res ? "true" : "false"), "\n";

$res = ($a != $b);
echo "$a != $b ger ", ($res ? "true" : "false"), "\n";

$a = 42;
$b = 1337;
$res = ($a >= $b);
echo "$a >= $b ger ", ($res ? "true" : "false"), "\n";

$res = ($a <= $b);
echo "$a <= $b ger ", ($res ? "true" : "false"), "\n";



include(__DIR__ . "/footer.php");
