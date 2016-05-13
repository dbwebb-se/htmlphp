<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Numbers</title>

<h1>Numbers</h1>
<hr>
<pre><?php 

$diceMin = 1;
$diceMax = 6;
$dice1 = rand($diceMin, $diceMax);
$dice2 = rand($diceMin, $diceMax);
$dice3 = rand($diceMin, $diceMax);
$dice4 = rand($diceMin, $diceMax);
$dice5 = rand($diceMin, $diceMax);
$dice6 = rand($diceMin, $diceMax);

$html = "Tärning 1: $dice1\n";
$html .= "Tärning 2: $dice2\n";
$html .= "Tärning 3: $dice3\n";
$html .= "Tärning 4: $dice4\n";
$html .= "Tärning 5: $dice5\n";
$html .= "Tärning 6: $dice6\n";

echo $html;


$sum = $dice1 + $dice2 + $dice3 + $dice4 + $dice5 + $dice6;
$num = 6;
$average = round($sum / $num, 3);
$max = max($dice1, $dice2, $dice3, $dice4, $dice5, $dice6);
$min = min($dice1, $dice2, $dice3, $dice4, $dice5, $dice6);


$html = <<<EOD
Summa: $sum
Kast: $num
Snitt: $average
Max: $max
Min: $min
EOD;

echo $html;

/*
$html = "Summa: $sum
Kast: $num
Snitt: $average
Max: $max
Min: $min";
*/

//$html = "Summa: $sum\n" . "Kast: $num\n" . "Snitt: $average\n" . "Max: $max\n" . "Min: $min\n";



/*
echo "-----------------------------------\n";

$number = -42;
$abs = abs($number);
echo "Det absoluta värdet av $number är $abs.\n";

$dice = rand(1, 6);
echo "Alia acta est $dice\n";


echo "-----------------------------------\n";

$age = 48;
echo "Mikael är $age år gammal.\n";

$year = 2016;
$born = $year - $age;
echo "Mikael föddes året $born.\n";

$when = 100 - $age + $year;
echo "Mikael fyller 100 år $when.\n";
*/
