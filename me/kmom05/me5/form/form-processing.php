<?php
if ($message = $_POST["form-message"] ?? false) {
    //$message = $_POST["form-message"] ?? null;
    $_SESSION["form-message"] = "$message";
}

$url = "form.php?page=form-result";
header("Location: $url");
