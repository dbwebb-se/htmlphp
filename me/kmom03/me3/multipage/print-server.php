<h1>Print the coontent of $_SERVER</h1>

<p>The content of the PHP variabel <code>$_SERVER</code> is: </p>

<pre>
<?htmlentities(print_r($_SERVER, true)); ?>
</pre>

<p>The server is running <code><?=htmlentities($_SERVER['SERVER_SIGNATURE']); ?></code></p>

<p>Your  IP adress is: <code><?=htmlentities($_SERVER['REMOTE_ADDR']); ?></code></p>

<p>Current script path: <code><?=htmlentities($_SERVER['SCRIPT_NAME']); ?></code></p>

<p>Request method: <code><?=htmlentities($_SERVER['REQUEST_METHOD']); ?></code></p>
