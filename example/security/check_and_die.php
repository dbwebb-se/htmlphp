<?php
/**
 * Example to show off how one can check incoming and just die.
 *
 * Access this page using this url (modify to your environment):
 * ?id=3
 * ?if=/etc/passwd
 */

// The demo code is commentet out by default, remove the starting comment
// to make it run.


/*
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
