<?php
/**
 * A processing page for a post form.
 */



?><?php if ($_POST["create"] ?? false) : ?>
<output>
    <p>This is the content of the posted form.</p>
    <pre>
        <?= var_dump($_POST) ?>
    </pre>
</output>
<?php endif; ?>
