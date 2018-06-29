<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



$a = 42;
$b = "42";

$res = ( $a == $b );
echo $res ? "true" : "false", "\n";

$res = ( $a === $b );
echo $res ? "true" : "false", "\n";



include(__DIR__ . "/footer.php");
