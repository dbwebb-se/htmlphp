<h1>Remember posted values (GET)</h1>

<p>This form can be posted and it remembers the values of the posted form elements.</p>

<form class="form" method="get">
<fieldset>
<legend>Create your own business card</legend>
    <input id="page" type="hidden" name="page" value="remember">
    <p>
        <label for="title">Title:</label>
        <input id="title" type="text" name="title" value="<?= htmlentities($_GET["title"] ?? null) ?>">
    </p>
    <p>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" value="<?= htmlentities($_GET["name"] ?? null) ?>">
    </p>
    <p>
        <label for="image">Image:</label>
        <input id="image" type="text" name="image" value="<?= htmlentities($_GET["image"] ?? null) ?>">
    </p>
    <p>
        <label for="address">Address:</label>
        <input id="address" type="text" name="address" value="<?= htmlentities($_GET["address"] ?? null) ?>">
    </p>
    <p>
        <label for="city">City:</label>
        <input id="city" type="text" name="city" value="<?= htmlentities($_GET["city"] ?? null) ?>">
    </p>
    <p>
        <input type="submit" name="create" value="Create">
        <input type="reset" value="Reset">
    </p>
</fieldset>
</form>

<?php if (isset($_GET["create"])) : ?>
    <output>
    <p>The form was posted and <code>$_GET</code> contains:</p>
    <pre>
    <?= htmlentities(print_r($_GET, 1)) ?>
    </pre>
    </output>
<?php endif; ?>
