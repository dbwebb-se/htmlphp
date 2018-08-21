<!--
<nav class="navbar">
    <a href="me.php">Hem</a>
    <a class="selected" href="report.php">Redovisning</a>
    <a href="about.php">Om</a>
</nav>
-->

<?php $uriFile = basename($_SERVER["REQUEST_URI"]); ?>
<nav class="navbar">
    <a class="<?= $uriFile == "me.php" ? "selected" : null ?>" href="me.php">Hem</a>
    <a class="<?= $uriFile == "navbar.php" ? "selected" : null ?>" href="navbar.php">Navbar test</a>
    <a class="<?= $uriFile == "about.php" ? "selected" : null ?>" href="about.php">Om</a>
</nav>

<pre>

<?php
$uri = $_SERVER["REQUEST_URI"];
echo "URI: $uri\n";

$uriFile = basename($uri);
echo "URI file part: $uriFile\n";
?>

</pre>
