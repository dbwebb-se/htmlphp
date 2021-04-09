<h1>Session Information</h1>

<h2>Session status</h2>

<?php if (session_status() === PHP_SESSION_NONE) : ?>
    <p>The session is not active and have no content.</p>
<?php else : ?>
    <p>Here is details on the session.</p>
    <p>Session id: <code><?= session_id() ?></code></p>
    <p>Session name: <code><?= session_name() ?></code></p>
    <p>The session expires in <?= session_cache_expire() ?> minutes.</p>
    <p>Here is the content of <code>$_SESSION</code>.</p>
    <pre><?=htmlentities(var_dump($_SESSION))?></pre>

<?php endif;?>
