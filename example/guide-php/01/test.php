<?php
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);     // Display all errors 
?>



<pre>
<?php

function theAnswer()
{
    return 42;
}

$a = theAnswer();
echo $a;

?>
</pre>
