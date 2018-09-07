<?php
/**
 * A self submitting form, submits itself to the same page.
 */



?><!doctype html>
<meta charset="utf-8">
<title>POST form to self</title>
<form method="post">
    <fieldset>
        <label>POST form to self</label>
        <p>
            <label for="title">Title:</label>
            <input id="title" type="text" name="title" value="<?= htmlentities($_POST["title"] ?? null) ?>">
        </p>
        <p>
            <input type="submit" name="create" value="Create">
            <input type="reset" value="Reset">
        </p>
    </fieldset>
</form>

<?php if ($_POST["create"] ?? false) : ?>
<output>
    <p>This is the content of the posted form.</p>
    <pre>
        <?= var_dump($_POST) ?>
    </pre>
</output>
<?php endif; ?>
