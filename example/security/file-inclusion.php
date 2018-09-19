<?php
/**
 * Example to show off how security works with file-inclusion.
 *
 * Access this page using this url (modify to your environment):
 * ?page=../../composer.json
 * ?page=../../../../etc/passwd
 * ?page=../../../../var/log/php.log
 */

 // The demo code is commentet out by default, remove the comment
 // to make it run.
/*
?>
<p>Demo start: file inclusion</p>
<?= $_GET["page"] ?>
<hr>
<pre>
<?php require "{$_GET["page"]}"; ?>
</pre>
<hr>
<p>Demo end.</p>
*/
