<h1>Login</h1>

<p>Login to the website by using doe as user and doe as password or admin:admin. Set the session to remeber that the user is logged in.</p>

<form method="post" action="?page=login-process.php">

    <fieldset>
        <legend>Login</legend>

        <p><label>User:<br>
            <input type="text" name="user">
        </label></p>
        
        <p><label>Password:<br>
            <input type="password" name="password">
        </label></p>
        
        <input type="submit" name="login" value="Login">

    </fieldset>

</form>
