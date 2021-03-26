<h1>Session Count</h1>

<?php
if (!isset($_SESSION["sNumber"])) {
    $_SESSION["sNumber"] = 0.5;
};

$sNumber = $_SESSION["sNumber"] ?? 0;

$sNumber = $sNumber * 2;

$_SESSION["sNumber"] = $sNumber;

?>

<pre>
<?= print_r($_SESSION["sNumber"], true); ?>
</pre>
