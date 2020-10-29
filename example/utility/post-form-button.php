<?php

$doClick = $_POST["doClick"] ?? null;
$doClick = true;


?><h1>Post the form</h1>
<form method="post">
    <p><input name="a"></p>
    <p><button name="doClick">Click me</button></p>
</form>

<?php if ($doClick) : ?>
    <pre><?php var_dump($_POST) ?></pre>
<?php endif; ?>
