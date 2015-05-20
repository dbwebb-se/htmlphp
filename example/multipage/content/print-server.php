<p>The content of the PHP variabel <code>$_SERVER</code> is:<p>

<pre>
<?= htmlentities(print_r($_SERVER, true)); ?>
</pre>

<p>The server is running: <?= htmlentities($_SERVER['SERVER_SIGNATURE']); ?></p>

<p>Your IP adress is: <?= htmlentities($_SERVER['REMOTE_ADDR']); ?></p>
