<h1>Form</h1>
<p>This form posts to a processing page, which redirects to a resulting page(this same page), showing a status message to the user.</p>

<form method="post" action="form.php?page=form-processing">
    <fieldset>
        <p><label>Type your message:<br>
            <textarea name="form-message" rows="5" cols="40"></textarea>
        </label></p>

        <input type="submit" name="submit" value="Submit">
    </fieldset>
</form>
