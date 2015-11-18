<!doctype html>
<meta charset0"utf-8"/>
<style>
html {
    background-color: #222;
    color: #0f0;
}
body {
    margin: 8px auto;
    margin-top: 20px;
    width: 600px;
    font-size: 28px;
}
</style>

<pre>

<?php 
echo "Hello World\n\n";

/**
 * Use some builtin functions.
 *  http://php.net/manual/en/funcref.php
 *
 * Start with md5(). Check up string functions, array, math, date & time.
 */
$password = "Mumintrollet68";
$hash = md5($password);

echo "The string:\n$password\ngenerated the md5 hash of:\n$hash";


$x = 27;
$y = 97;
$z = 3;

$maxValue = max($x, $y, $z);

echo "\n\nMax value is: $maxValue\n";

$minValue = min($x, $y, $z);

echo "\n\nMin value is: $minValue\n";


/**
 * Create my own functions
 *  http://php.net/manual/en/language.functions.php
 *
 * Pure, arguments, returnvalue, typehints.
 * Perhaps dice. Perhaps histogram. Perhaps card.
 * Return html as heredoc (and parse variables).
 */



/**
 * Throw the dice.
 */
function throwDice() {
    $value = rand(1, 6);
 
    return $value;
}



/**
 * Sum the dices in the hand.
 */
function sumDiceHand($aHand) {
    //global $hand;
    
    return array_sum($aHand);
}



$hand = [];
for ($i = 0; $i < 5; $i++) {
    $hand[] = throwDice();
}

//echo "\n\nDicehand contains " . count($hand) . " values like this:\n" . print_r($hand, true) . "\n";
echo "\n\nDicehand contains "
    . count($hand)
    . " values like this:\n"
    . implode(", ", $hand)
    . "\n";
    
echo "\n\nSum of hand is: " . sumDiceHand($hand) . "\n";



 
 
 
 
 
 
 
 
 
 
 
