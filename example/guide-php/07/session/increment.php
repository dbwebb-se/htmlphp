<h1>Increment a value in the session</h1>

<p>Reload this page to see a value in the session being incremented.</p>

<p>The incoming content of <code>$_SESSION</code> is:</p>
<pre><?= var_dump($_SESSION) ?></pre>

<p><b>Now</b> the code that increments the session is executed.</p>

<?php
// Read the value from the session, if it does not exist set
// it to 0.
if (!isset($_SESSION["number"])) {
    $_SESSION["number"] = 0;
}

$_SESSION["number"] += 1;


// // An alternative solution, doing the same thing, but different code
// // Get value from session or use 0 as default
// $number = $_SESSION["number"] ?? 0;
// 
// // Increment the variable
// $number++;
// 
// // Write the value to the session to remember it
// $_SESSION["number"] = $number;

?>

<p>The current value of <code>$_SESSION["number"]</code> is <b>'<?= $_SESSION["number"] ?>'</b>.</p>

<p>The outgoing content of <code>$_SESSION</code> is:</p>
<pre><?= var_dump($_SESSION) ?></pre>
