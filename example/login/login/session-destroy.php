<h1>Destroy the session</h1>

<?php
/**
 * This is how the session should be destroyed, according to the manual page:
 * http://php.net/manual/en/function.session-destroy.php
 */
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
//session_start();
// The named session is already started in out config.php.

// Unset all of the session variables.
$_SESSION = [];

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
