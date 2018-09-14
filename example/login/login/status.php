<h1>Status</h1>

<?php
$details = getLoggedInUser();

$isLoggedIn = $details === false? "is NOT" : "is";

$hashDetails = password_get_info($details['password']);

?>

<p>The user <?=$isLoggedIn?> logged in.</p>

<?php if ($details) : ?>

<p>Here are details on the user.</p>

<pre><?=var_dump($details)?></pre>

<p>Here are details on the encrypted password.</p>

<pre><?=var_dump($hashDetails)?></pre>

<?php endif; ?>
