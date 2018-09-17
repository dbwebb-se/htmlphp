<?php
// Logout by unsetting user in session
$user = $_SESSION["user"] ?? null;
$_SESSION["user"] = null;
$_SESSION["flashmessage"] = "User $user has logged out.";
header("Location: ?page=status");
