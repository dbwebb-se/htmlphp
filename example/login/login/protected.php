<?php if (!($_SESSION["user"] ?? null)) : ?>
    <p>You need to login to see protected information.</p>
    <?php return; ?>
<?php endif; ?>

<h1>Protected page</h1>

<p>This page contains confidential information which is only showed if the user is has login.</p>

<p>The user <b><?= $_SESSION["user"] ?></b> is currently logged in.</p>
<p>The users real name is <b><?= $_SESSION["name"] ?></b>.</p>
<p>The hashed password of this user is: '<b><code><?= $users[$_SESSION["user"]]["password"] ?></code></b>'.</p>
