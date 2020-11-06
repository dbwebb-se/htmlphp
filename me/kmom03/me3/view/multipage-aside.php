
<aside>
    <nav>
        <ul>
        <?php foreach ($pages as $key => $value) : ?>
            <li><a href="?page=<?= $key ?>"><?= $value["title"] ?></a></li>
        <?php endforeach; ?>
        </ul>
    </nav>
</aside>
