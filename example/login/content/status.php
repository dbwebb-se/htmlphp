<?php
$details = getLoggedInUser();

$isLoggedIn = $details === false? "är INTE" : "är";

$hashDetails = password_get_info($details['password']);

?>

<p>Användaren <?=$isLoggedIn?> inloggad.</p>

<?php if ($details) : ?>

<p>Här följer detaljer om användaren.</p>

<pre><?=var_dump($details)?></pre>

<p>Följande är detaljer om det krypterade lösenordet.</p>

<pre><?=var_dump($hashDetails)?></pre>

<?php
endif;
?>
