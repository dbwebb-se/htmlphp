<h1>Create business card (POST)</h1>

<p>This form can be posted (method POST) and its result is sent to another multipage that handles the processing of the posted form and then redirects to the page that finally generates the business card. Click this <a href="?page=generate-card-post&amp;name=Mikael+Roos&amp;title=Mega+Vice+President&amp;address=<?= urlencode("Munksjön, Penthouse") ?>&amp;city=<?= urlencode("Jönköping") ?>&amp;image=<?= urlencode("http://dbwebb.se/image/mikael-roos/me-1.jpg&w=100") ?>">link to prefill the form</a> and then press the button "Create".</p>

<form class="form" method="post" action="?page=generate-card-post-process">
<fieldset>
<legend>Create your own business card</legend>
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
