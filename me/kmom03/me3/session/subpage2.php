<h1>Print the content of $_SERVER</h1>

<!--<p>The content of the PHP variabel <code>$_SERVER</code> is: </p>
-->

<?php
//var_dump($_SERVER);

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

$answer_array = findLongestStringFromArray();
$answer = $answer_array[0]. " is the longest with its ". $answer_array[1]. " character length.";

function findKeyLenValue()
{
    foreach ($_SERVER as $key => $value) {
        print_r($key. " has the length of ". strlen($value). ".<br>");
    }
}

?>

<!--<p>The number of items in the Array is: <code><?= count($_SERVER) ?> </code></p>
<p>The first and last item of <code>$_SERVER</code> is: </p>
<p>The first: <code><?= array_key_first($_SERVER) ?></code></p>
<p>The last: <code><?= array_key_last($_SERVER) ?></code></p>
-->

<p>Key and value length of key: <code><?= print_r($answer, true) ?></code></p>
<p>All items with their length in the Array:<br> <code><?= findKeyLenValue() ?></code></p>
