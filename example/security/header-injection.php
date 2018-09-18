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
/*
?>
<p>Demo start: header injection.</p>
<pre>
<?= "HTTP_USER_AGENT=" . htmlentities($_SERVER["HTTP_USER_AGENT"]) ?>
</pre>
<hr>
<?= $_SERVER["HTTP_USER_AGENT"] ?>
<hr>
<p>Demo end.</p>
