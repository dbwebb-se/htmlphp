<?php

include __DIR__ . "/config.php";
include __DIR__ . "/src/functions.php";
include __DIR__ . "/view/header.php";
include __DIR__ . "/view/navbar.php";

$code = $_GET["code"] ?? null;

?><h1>Ta bort kurs</h1>

<form action="delete_process.php" method="post">
    <p>
        <label for="code">Kod:<br>
        <input type="text" name="code" value="<?= $code ?>"></label>
    </p>
    <p>
        <input type="submit" value="Ta bort kurs">
    </p>
</form>
