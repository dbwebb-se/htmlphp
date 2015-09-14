<!doctype html>
<meta charset="utf-8">

<pre>
    
<?php 
echo "HELLO " . PHP_VERSION . "\n";

$person1 = "Pelle";
$person2 = "MegaMikael";
$person3 = "Per";

$personer = "$person1 $person2 $person3";

echo "$personer\n";

var_dump($personer);

// $group = array();
echo "\n";
$group = [$person1, $person2, $person3];
var_dump($group);
