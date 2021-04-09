<?php

$pos = $_GET["pos"] ?? null;

printJettySearch();

?><h1>Visa kurs pos='<?= $pos ?>'</h1>

<?php include(__DIR__ ."/../view/flextable.php") ?>