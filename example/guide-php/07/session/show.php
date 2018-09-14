<h1>Show values from the session</h1>

<?php if (session_status() === PHP_SESSION_ACTIVE) : ?>

    <p>Here follows some details on the session.</p>

    <p>The session name is: <code><?= session_name() ?></code></p>
    <p>The session id is: <code><?= session_id() ?></code></p>
    <p>The session expires in <?= session_cache_expire() ?> minutes.</p>

    <p>The current content of <code>$_SESSION</code> is:</p>
    <pre><?= var_dump($_SESSION) ?></pre>

<?php else : ?>

    <p>The session is not active, have you started the session?</p>

<?php endif; ?>
