<h1>Print the coontent of $_SERVER</h1>

<!--<p>The content of the PHP variabel <code>$_SERVER</code> is: </p>
-->

<?php
//var_dump($_SERVER);
$longestKey = "";
$longestValueLength = "";
$answer = [$longestKey, $longestValueLength];

function findLongestStringFromArray()
{
    $longestValueLength = 0;
    $longestKey = "";
    foreach ($_SERVER as $key => $value) {

        if (strlen($value) > $longestValueLength) {
            $longestValueLength = strlen($value);
            $longestKey = $key;
        }
        $answer = [$longestKey, $longestValueLength];
    }
    return $answer;
}

findLongestStringFromArray($answer);
?>

<p>The number of items in the Array is: <code><?= count($_SERVER) ?> </code></p> 
<p>The first and last item of <code>$_SERVER</code> is: </p>
<p>---The first: <code><?= array_key_first($_SERVER) ?></code></p>
<p>---The last: <code><?= array_key_last($_SERVER) ?></code></p>


<!--<p>Key and value length of key: <code><?= print_r(findLongestStringFromArray($answer)) ?></code></p>
-->
