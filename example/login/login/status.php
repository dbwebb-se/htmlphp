<h1>Status</h1>

<p>Check if the user is logged in and then show details on the logged in user.</p>

<?php if ($_SESSION["user"] ?? null) : ?>
    <p>The user <b><?= $_SESSION["user"] ?></b> is currently logged in.</p>
    <p>The users real name is <b><?= $_SESSION["name"] ?></b>.</p>
<?php else : ?>
    <p>No user is logged in.</p>
<?php endif; ?>
