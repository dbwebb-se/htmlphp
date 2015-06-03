<?php
//$name = "mysessionname1";
$name = substr(preg_replace('/[^a-z\d]/i', '', __DIR__), -30);
session_name($name);
session_start();



// Check if session should be destroyed
$destroy = isset($_GET['destroy']) ? true : false;

if ($destroy) {
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();

    // And restart the session again, or the exampleprogram fails.
    // Get a new id, just for the fun of it.
    session_start();
    session_regenerate_id();
}

// Get the id of the current session
$id = session_id();



// Check if to reset session counter value
$reset = isset($_GET['reset']) ? true : false;

if ($reset) {
    $_SESSION['counter'] = -2;
}



// Get current value of the counter, if it exists, else init it to zero
$counter = isset($_SESSION['counter']) ? $_SESSION['counter'] : 0;

// Increment the counter
$counter += 1;

// Store the countervalue in the session
$_SESSION['counter'] = $counter;



// Check when the cache expires
$expire = session_cache_expire();



?><!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Session increment</title>
</head>

<body>
    <h1>Session increment</h1>
    
    <p><a href="?">Reload the page to increment the counter</a>.<p>
    <p><a href="?destroy">Destroy session</a>.<p>
    <p><a href="?reset">Reset counter value to -1</a>.<p>
    
    <p>Session name is: <?=$name?></p>
    <p>Session id is: <?=$id?></p>
    <p>The cached session pages expire after <?=$expire?> minutes.</p>
    <p>Current value of session counter is: <?=$counter?>.</p>
    <p>The array $_SESSION contains:</p>
    <pre><?=print_r($_SESSION, true)?></pre>

</body>
</html>
