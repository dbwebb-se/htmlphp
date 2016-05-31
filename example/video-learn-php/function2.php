<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Function</title>

<h1>Function</h1>
<hr>
<pre>
<?php


function rememberAndIncrement()
{
    static $value = 0;

    $value++;
    return "The value is $value.";
}

$str = rememberAndIncrement();
var_dump($str);

$str = rememberAndIncrement();
var_dump($str);

$str = rememberAndIncrement();
var_dump($str);
