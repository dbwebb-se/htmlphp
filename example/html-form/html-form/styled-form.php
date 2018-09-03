<h1>A styled HTML form</h1>

<p>Added some style to the form av adding a class to the form element and structured elements using label-for structure.</p>

<form class="form">
<fieldset>
<legend>Create your own business card</legend>
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
        <input type="button" name="create" value="Create">
        <input type="reset" value="Reset">
    </p>
</fieldset>
</form>
