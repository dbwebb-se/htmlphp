<h1>Post HTML form (POST)</h1>

<p>This form can be posted using the POST method where the form content is delivered through the HTTP message body, insted of through the query string. That is the difference between POST (http message body) and GET (query string), the way the form content is delivered to the server.</p>

<form class="form" method="post" action="?page=post-form-as-post">
<fieldset>
<legend>Create your own business card</legend>
    <p>
        <label for="title">Title:</label>
        <input id="title" type="text" name="title" value="<?= htmlentities($_POST["title"] ?? null) ?>">
    </p>
    <p>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" value="<?= htmlentities($_POST["name"] ?? null) ?>">
    </p>
    <p>
        <label for="image">Image:</label>
        <input id="image" type="text" name="image" value="<?= htmlentities($_POST["image"] ?? null) ?>">
    </p>
    <p>
        <label for="address">Address:</label>
        <input id="address" type="text" name="address" value="<?= htmlentities($_POST["address"] ?? null) ?>">
    </p>
    <p>
        <label for="city">City:</label>
        <input id="city" type="text" name="city" value="<?= htmlentities($_POST["city"] ?? null) ?>">
    </p>
    <p>
        <input type="submit" name="create" value="Create">
        <input type="reset" value="Reset">
    </p>
</fieldset>
</form>

<?php if (isset($_POST["create"])) : ?>
    <output>
    <p>The form was posted and <code>$_POST</code> contains:</p>
    <pre>
    <?= htmlentities(print_r($_POST, 1)) ?>
    </pre>
    </output>
<?php endif; ?>
