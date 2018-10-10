<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";



?><h1>Skapa om databasen</h1>

<form action="init_process.php" method="post">
    <p>
        <input type="submit" value="Skapa om databasen">
    </p>
</form>
