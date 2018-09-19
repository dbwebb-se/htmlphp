<div class="wrap-main">

<?php include __DIR__ . "/report_aside.php"; ?>

    <article class="subpage">
        <p><code><?= $subpage ?></code></p>
        <?php require $subpage; ?>
    </article>
</div>
