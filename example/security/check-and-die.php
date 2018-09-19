<?php
/**
 * Example to show off how security works with header injection through
 * $_SERVER.
 *
 * Access this page using this url (modify to your environment):
 * ?page=../../composer.json
 * ?page=../../../../etc/passwd
 * ?page=../../../../var/log/php.log
 */

// The demo code is commentet out by default, remove the starting comment
// to make it run.



// Get an id from the querystring
$id = $_GET["id"] ?? -1;

// Check if id is numeric.
if (!is_numeric($id)) {
    die("Invalid id, must be a number.");
} 

// Continue to do actual work, now a bit more safe

?>
<p>Demo start: check and die.</p>
<hr>
<pre>
<?= htmlentities($id) ?>
</pre>
<hr>
<p>Demo end.</p>
