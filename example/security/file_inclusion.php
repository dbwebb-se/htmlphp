<?php
/**
 * Example to show off how security works with file-inclusion.
 *
 * Access this page using this url (modify to your environment):
 * ?page=sub/page.php
 * ?page=etc/passwd
 * ?page=../../composer.json
 */

 // The demo code is commentet out by default, remove the comment
 // to make it run.

$page = $_GET["page"] ?? null;


/*
?>
<p>Demo start: file inclusion</p>
<?= $page ?>
<hr>
<pre>
<?php if ($page) require $page; ?>
</pre>
<hr>
<p>Demo end.</p>
