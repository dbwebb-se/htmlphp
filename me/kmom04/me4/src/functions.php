<?php

$page = null;
$pages = null;
$pageReference = null;
$defaultPage = "me.php";

function getPageDetailsOfMultiPage($pages, $defaultPage, $path)
{
    $pageRequest = $_GET["page"] ?? $defaultPage;

    $isValid = $pages[$pageRequest] ?? null;
    $page = null;
    if ($isValid) {
        $page = $pages[$pageRequest];
        $page["request"] = $pageRequest;

        $base = basename($path, ".php");
        $file = "$base/${pageRequest}.php";
        $page["file"] = $file;
    }

    return $page;
}

function sessionDestroy()
{
    $_SESSION = [];

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - 42000,
            $params["path"],
            $params["domain"],
            $params["secure"],
            $params["httponly"]
        );
    }
    session_destroy();
};
