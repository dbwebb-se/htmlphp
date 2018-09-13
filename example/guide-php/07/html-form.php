<?php
/**
 * This is a page controller for a multipage. You should name this file
 * as the name of the pagecontroller for this multipage. You should then
 * add a directory with the same name, excluding the file suffix of ".php".
 * You then then have several multipages within the same directory, like this.
 *
 * multipage.php
 * multipage/
 *
 * some-test-page.php
 * some-test-page/
 */
 // Include the configuration file
 require __DIR__ . "/config.php";

 // Include essential functions
 require __DIR__ . "/src/functions.php";

// Get what subpage to show, defaults to index
$pageReference = $_GET["page"] ?? "index";

// Get the filename of this multipage, exkluding the file suffix of .php
$base = basename(__FILE__, ".php");

// Create the collection of valid sub pages.
$pages = [
    "index" => [
        "title" => "Introduction",
        "file" => __DIR__ . "/$base/index.php",
    ],
    "unstyled-form" => [
        "title" => "A HTML form",
        "file" => __DIR__ . "/$base/unstyled-form.php",
    ],
    "styled-form" => [
        "title" => "A styled HTML form",
        "file" => __DIR__ . "/$base/styled-form.php",
    ],
    "post-form-as-get" => [
        "title" => "Post HTML form (GET)",
        "file" => __DIR__ . "/$base/post-form-as-get.php",
    ],
    "remember" => [
        "title" => "Remember posted values (GET)",
        "file" => __DIR__ . "/$base/remember.php",
    ],
    "post-form-as-post" => [
        "title" => "Post HTML form (POST)",
        "file" => __DIR__ . "/$base/post-form-as-post.php",
    ],
    "generate-card" => [
        "title" => "Generate business card",
        "file" => __DIR__ . "/$base/generate-card.php",
    ],
    "generate-card-get" => [
        "title" => "Create business card (GET)",
        "file" => __DIR__ . "/$base/generate-card-get.php",
    ],
    "generate-card-post" => [
        "title" => "Create business card (POST)",
        "file" => __DIR__ . "/$base/generate-card-post.php",
    ],
    "generate-card-post-process" => [
        "title" => null,
        "file" => __DIR__ . "/$base/generate-card-post-process.php",
    ],
];

// Get the current page from the $pages collection, if it matches
$page = $pages[$pageReference] ?? null;

// Base title for all pages and add title from selected multipage
$title = $page["title"] ?? "404";
$title .= " | Test multipage";

// Render the page
require __DIR__ . "/view/header.php";
require __DIR__ . "/view/multipage.php";
require __DIR__ . "/view/footer.php";
