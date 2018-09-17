<h1>Logout</h1>

<p>Logout from the website by unsetting values in the session. The form is posted to a processing page 'logout-process' that updates the session. The processing page redirects to the status page.</p>

<form method="post" action="?page=logout-process">

    <fieldset>
        <legend>Logout</legend>

        <input type="submit" name="logout" value="Logout">

    </fieldset>

</form>
