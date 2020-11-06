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
