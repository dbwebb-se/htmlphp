<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/src/functions.php");
include(__DIR__ . "/view/layout/multipage-top.php");

$search = $_GET["search"] ?? null;

searchDinosaur();

?><h1>Visa dinosaurie='<?= $search ?>'</h1>

<?php
include(__DIR__ ."/view/flextable.php");
include(__DIR__ . "/view/layout/multipage-bottom.php");
