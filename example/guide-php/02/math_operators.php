<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");


$val = 1 + 2 + 3 + 4 + 5;
echo "Result: ", $val, "\n";

$val = 1 * 2 - 3 / 4 + 5;
echo "Result: ", $val, "\n";

$val = 1 * (2 - 3) / (4 + 5);
echo "Result: ", $val, "\n";

$val = 8 % 3;
echo "Result: ", $val, "\n";



include(__DIR__ . "/footer.php");
