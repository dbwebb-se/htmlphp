<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";



?><h1>Lägg till ny kurs</h1>

<form action="create_process.php" method="post">
    <p>
        <label for="code">Kod:<br>
        <input type="text" name="code"></label>
    </p>
    <p>
        <label for="code">Namn:<br>
        <input type="text" name="name"></label>
    </p>
    <p>
        <input type="submit" value="Lägg till">
    </p>
</form>
