<?php
require __DIR__ . "/config.php";
require __DIR__ . "/src/functions.php";

echo "<p>Incoming<pre>";
var_dump($_SESSION);

sessionDestroy();

echo "</pre><hr><p>Outgoing<pre>";
var_dump($_SESSION);
