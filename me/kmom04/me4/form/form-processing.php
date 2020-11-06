<?php
$message = $_POST["form-message"] ?? null;

//if ($message === "happy") {
//    $_SESSION["form-message"] = "$message";
//} elseif ($message === "sad") {
//    $_SESSION["form-message"] = "This is a SAD message...";
//};
include(__DIR__ . "/form-result.php");
