<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Strings</title>

<h1>Strings</h1>
<hr>
<pre><?php 

$url = "http://dbwebb.se/htmlphp/studieplan";

$str1 = "Mumintroll";
$str2 = "Mumintrollet";

var_dump($str1 == $str1);
var_dump($str1 == $str2);

var_dump(strcmp($str1, $str1));
var_dump(strcmp($str1, $str2));
var_dump(strcmp($str2, $str1));


/*
$protocol = substr($url, 0, 4);
$host = substr($url, 7, 9);
$last = substr($url, -4);

$trimmed = trim(" //moped/mask//  ");
$trimmed = trim($trimmed, "/");

$html = <<< EOD
Protokollet är "$protocol".
Hostnamnet är "$host".
Sista tecknen är: "$last".

Trimmad sträng: "$trimmed".

EOD;

echo $html;

/*
$len = strlen($url);
$last = $len -1;
$lastChar = $url[$last];
$fourteen = $url[13];

$html = <<< EOD
Strängen är: "$url"
Första bokstaven är: "$url[0]"
Sista bokstaven är: "$lastChar"
Strängens längd är $len tecken.
Fjortonde tecknet är "$fourteen".
EOD;

echo $html;
*/
