<?php
/**
 * Example to show off how XSS is done and how to protect yourself.
 *
 * Access this page using this url:
 * ?content=</textarea><script>alert("hej");</script>
 *
 */

// The demo code is commentet out by default, remove the comment
// to make it run.

$content = $_GET["content"] ?? null;


/*
?>
<p>Demo start: XSS with textarea.</p>
<form>
    <textarea name="content"><?= $content ?></textarea>
    <br>
    <input type="submit">
</form>
<hr>
<form>
    <textarea><?= htmlentities($content) ?></textarea>
</form>
<p>Demo end.</p>

/* */
