<!doctype html>
<meta charset="utf-8">
<style>
body {
    padding-left: 2em;
    font-size: larger;
}
</style>
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
$group = [$person1, $person2, $person3];

echo "\nVARDUMP:\n";
var_dump($group);

echo "\nPRINT_R:\n";
print_r($group);

echo "\nONLY ECHO \n" . $group;

// ---
$dice = rand(1, 6);
echo "\nDICE: $dice\n";

$hand = [];
for ($i = 1; $i <= 5; $i++) {
    //echo $i;
    $hand[] = rand(1, 6);
}

echo "\nVARDUMP:\n";
var_dump($hand);



// 
$ball = rand(0, 35);

$colors = ['green', 'black', 'red'];
$table = [0,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2];

$color = $table[$ball];
$colorAsString = $colors[$color];

echo "\nROULETTE: $ball COLOR: $colorAsString represented by the value of $color\n";

$bet = 100 * 3;
$betColor = 'red';

if ($betColor === $colorAsString) {
    echo "\n WINNER " . $bet * 2;
} else {
    echo "\n LOOOSER ";    
}


// Key value array
//$arr['my key'] = "moped";
//$arr[0] = 0;


/*
function getColor (n) {
    $colors = ['green', 'black', 'red'];
    table = [0,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2,2,1,2,1,2,1,2,1,2,1,1,2,1,2,1,2,1,2];   
  return colors[table[n]];
}
