<?php
$nameMessage = $_POST["contact-name"] ?? null;
$eMailMessage = $_POST["contact-email"] ?? null;
$contactMessage = $_POST["contact-comment"] ?? null;

$_SESSION["contact-name"] = $nameMessage ?? null;
$_SESSION["contact-email"] = $eMailMessage ?? null;
$_SESSION["contact-comment"] = $contactMessage ?? null;

//include(__DIR__ . "/form-contact-result.php");
header('Location: form.php?page=form-contact-result');
