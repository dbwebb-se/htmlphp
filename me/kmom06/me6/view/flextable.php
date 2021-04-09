<?php
$th = null;
if (isset($res[0]) && is_array($res[0])) {
    $th = array_keys($res[0]);
    $th = array_map("ucfirst", $th);
}

?>
<?php if ($th) : ?>
<table>
    <tr>
    <?php foreach ($th as $val) : ?>
        <th><?= $val ?></th>
    <?php endforeach; ?>
    </tr>

    <?php foreach ($res as $row) : ?>
        <tr>
            <?php foreach ($row as $val) : ?>
                <td><?= $val ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
<?php endif; ?>
