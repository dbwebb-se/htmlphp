<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Array key</title>

<h1>Array key</h1>
<hr>
<pre><?php

$person = [
    "name"  => "MegaMic",
    "age"   => 48,
    "skill" => "Mega-skill"
];
var_dump($person);
var_dump($person["name"]);

ksort($person);
var_dump($person);


/*
sort($person);
var_dump($person);



/*
$number["number4"] = 11;
var_dump($number);

$number[] = 13;
var_dump($number);

$number[] = 17;
var_dump($number);


$number = [1, 3, 7];
var_dump($number);
var_dump($number[1]);



/*
$number[] = 33;

$name = ["Mikael", "Moped", "Mupp", "Mumintrollet"];
$name[] = "Mega";


$numStr = implode("+", $number);
echo "$numStr\n";

$str = "Jag heter Mumintrollet och är glad.";
$arr = explode("e", $str);
var_dump($arr);

/*
var_dump( in_array(7, $number) );
var_dump( in_array(99, $number) );

var_dump( in_array("Mupp", $name) );
var_dump( in_array("No no", $name) );

var_dump( count($number) );
var_dump( count($name) );

var_dump($number);
var_dump($name);

/*
var_dump($name);
shuffle($name);
var_dump($name);
sort($name);
var_dump($name);
arsort($name);
var_dump($name);


/*
var_dump($number);
shuffle($number);
var_dump($number);
sort($number);
var_dump($number);
arsort($number);
var_dump($number);

//var_dump($name);

/*
echo "Postion 1 innehåller talet: " . $number[1] . "\n";
echo "Postion 4 innehåller namnet: " . $name[4] . "\n";
*/
