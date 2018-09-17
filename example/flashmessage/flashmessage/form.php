<h1>Form</h1>

<p>This form posts to a processing page, which redirects to a resulting page (this same page), showing a status message to the user.</p>

<form method="post" action="?page=form-process">

    <fieldset>
        <legend>Type of message</legend>

        <p><label>Type of message:<br>
            <input type="radio" name="message" value="happy" checked> Happy :-D<br>
            <input type="radio" name="message" value="sad"> Sad :-(<br>
        </label></p>

        <input type="submit" name="submit" value="Submit">

    </fieldset>

</form>
