<?php
/**
 * Example to show off how XSS is done and how to protect yourself.
 *
 * Access this page using this url:
 * ?page=<script>alert("You got XSS:ed. Got ya.");</script>
 *
 */

// The demo code is commentet out by default, remove the comment
// to make it run.

$page = $_GET["page"] ?? null;


/*
?>
<p>Demo start: XSS.</p>
<?= $page ?>
<hr>
<?= htmlentities($page) ?>
<p>Demo end.</p>

/* */
