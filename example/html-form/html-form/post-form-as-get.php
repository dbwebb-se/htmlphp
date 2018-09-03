<h1>A postable HTML form (GET)</h1>

<p>This form can be posted, its content will the be written out to the web page. This type is often called self-submitting form since it is submitted to the same page-url it originates from. A hidden field is used to post to the specific multipage.</p>

<form class="form" method="get">
<fieldset>
<legend>Create your own business card</legend>
    <input id="page" type="hidden" name="page" value="post-form-as-get">
    <p>
        <label for="title">Title:</label>
        <input id="title" type="text" name="title">
    </p>
    <p>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name">
    </p>
    <p>
        <label for="image">Image:</label>
        <input id="image" type="text" name="image">
    </p>
    <p>
        <label for="address">Address:</label>
        <input id="address" type="text" name="address">
    </p>
    <p>
        <label for="city">City:</label>
        <input id="city" type="text" name="city">
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
