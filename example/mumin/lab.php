<!doctype html>
<meta charset="utf-8">
<?php 

echo "<p>Hello";

$name = "Mikael";
echo "<p>Hello my name is $name.";

$number1 = 6;
$number2 = 12;

$sum = $number1 * $number2;
echo "<p>$sum";

echo "<p>" . $sum . " = " . $number1 . " x " . $number2;

echo "<p>" . ( $number1 + $number2 );

$sum = "7moped10" + "42" + $number1;
echo "<p>" . $sum;

$a = 3;

if ($a > 2) {
    echo "<p>Större än 2";
} else {
    echo "<p>Nåt annat...";
}

for ($i = 0; $i <= 10; $i++) {
    echo '<p>$i';
}

 
