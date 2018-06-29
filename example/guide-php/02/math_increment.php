<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");



$base = 1;
echo "Result: ", $base, "\n";
echo "Result: ", $base++, "\n";
echo "Result: ", ++$base, "\n";
echo "Result: ", $base, "\n";
echo "\n";

$base = 1;
echo "Result: ", $base, "\n";
echo "Result: ", --$base, "\n";
echo "Result: ", $base--, "\n";
echo "Result: ", $base, "\n";
echo "\n";

$base = 1;
$val = ++$base - $base-- + $base;
echo "Result: ", $val, "\n";



include(__DIR__ . "/footer.php");
