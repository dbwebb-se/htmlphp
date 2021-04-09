<h1>Print the coontent of $_SERVER</h1>

<p>The content of the PHP variabel <code>$_SERVER</code> is: </p>

<pre>
<?php
var_dump($_SERVER);
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
//array_key_first($answer);
//array_key_last($answer);

?>
</pre>

<p> The first and last item of <code>$_SERVER</code> is: </p>
<p>The first: <code><?= array_key_first($_SERVER) ?></code></p>
<p>The last: <code><?= array_key_last($_SERVER) ?></code></p>


<p>Key and value length of key: <code><?= print_r(findLongestStringFromArray($answer)) ?></code></p>
<!--<p>The server is running <code><?=htmlentities($_SERVER['SERVER_SIGNATURE']); ?></code></p>

<p>Your  IP adress is: <code><?=htmlentities($_SERVER['REMOTE_ADDR']); ?></code></p>

<p>Current script path: <code><?=htmlentities($_SERVER['SCRIPT_NAME']); ?></code></p>

<p>Request method: <code><?=htmlentities($_SERVER['REQUEST_METHOD']); ?></code></p>
-->
