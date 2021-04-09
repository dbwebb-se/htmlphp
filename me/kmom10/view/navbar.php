<?php

$uri = $_SERVER["REQUEST_URI"];
$uriFile = basename($uri);

$navbar = $siteNavbar ?? [];
?>

<nav class="navbar">
<?php foreach ($navbar as $item) :
    $selected = $item["controller"]  === $uriFile ?
    "selected" : null;
    ?>

    <a href="<?= $item["controller"] ?>" class="<?= $selected ?>"><?= $item["text"] ?></a>

<?php endforeach; ?>
</nav>
