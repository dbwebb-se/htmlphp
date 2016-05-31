<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Function</title>

<h1>Function</h1>
<hr>
<pre>
<?php

function isPalindrom($str)
{
    if (empty($str)) {
        return true;
    }

    $str = strtolower($str);
    $str = str_replace([" ", ","], "", $str);
    $length = strlen($str);

    $isPalindrom = false;
    $start = 0;
    $end = $length - 1;

    if ($str[$start] === $str[$end]) {
        $start++;
        $end--;
        $str = substr($str, $start, $end);
        return isPalindrom($str);
    }

    return $isPalindrom;
}

$str = "Rise to vote, sir";
$strModified = null;
$check = isPalindrom("Rise to vote, sir", true);
echo "$str is palindrom: ";
echo $check === true ? "TRUE" : "FALSE";
