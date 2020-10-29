<?php
include(__DIR__ . "/../config.php");

$uri = $_SERVER["REQUEST_URI"];
$uriFile = basename($uri);

if ($uriFile === "me.php"
    or $uriFile === "me-multipage.php"
    or $uriFile === "me-multipage.php?page=me"
    or $uriFile === "me-multipage.php?page=me-multipage"
    or $uriFile === "me-multipage.php?page=index"
    or $uriFile === "me-multipage.php?page=print-get"
    or $uriFile === "me-multipage.php?page=print-server"
    or $uriFile === "me-multipage.php?page=get-samples"
    ) {
    $navbar = $siteNavbar2 ?? [];
} else {
    $navbar = $siteNavbar ?? [];
}

?>

<nav  class="navbar">
<?php foreach ($navbar as $item) :
    $selected= $item["controller"]  === $uriFile ?
    "selected" : null;
    ?>

    <a href="<?= $item["controller"] ?>" class="<?= $selected ?>"><?= $item["text"] ?></a>

<?php endforeach; ?>
</nav>
