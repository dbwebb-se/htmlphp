<aside>
    <nav>
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <?php if (isset($value["title"])) : ?>
            <li><a href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
            <?php endif; ?>
        <?php endforeach; ?>
        </ul>
    </nav>
</aside>
