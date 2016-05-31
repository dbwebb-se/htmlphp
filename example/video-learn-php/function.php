<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Function</title>

<h1>Function</h1>
<hr>
<pre>
<?php

function isPalindrom($str, &$strModified, $debug = false)
{
    $str = strtolower($str);
    $str = str_replace([" ", ","], "", $str);
    $length = strlen($str);
    $strModified = $str;

    $isPalindrom = false;
    $start = 0;
    $end = $length - 1;
    while ($start <= $end) {
        if ($str[$start] === $str[$end]) {
            if ($debug === true) {
                echo "${str[$start]} === ${str[$end]}\n";
            }
            $start++;
            $end--;
            $isPalindrom = true;
            continue;
        }
        $isPalindrom = false;
        break;
    }
    
    return $isPalindrom;
}

$str = "Rise to vote, sir";
$strModified = null;
$check = isPalindrom("Rise to vote, sir", $strModified);

echo "$str is palindrom: ";
echo $check === true ? "TRUE" : "FALSE";
echo "\nChecked string was: $strModified\n";



//var_dump(isPalindrom("Ada"));
//var_dump(isPalindrom("Never odd or even"));






/*
//$str = "Ada";
$str = "Rise to vote, sir";
var_dump($str);

$str = strtolower($str);
var_dump($str);

$str = str_replace([" ", ","], "", $str);
var_dump($str);

$length = strlen($str);
var_dump($length);

$isPalindrom = false;
$start = 0;
$end = $length - 1;
while ($start <= $end) {
    if ($str[$start] === $str[$end]) {
        echo "${str[$start]} === ${str[$end]}\n";
        $start++;
        $end--;
        $isPalindrom = true;
        continue;
    }
    $isPalindrom = false;
    break;
}

var_dump($isPalindrom);
*/
