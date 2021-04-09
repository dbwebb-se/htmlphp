<?php

$siteTitle = " | htmlphp";

//$siteNavbar = [
//    ["controller" => "jetty.php",    "text" => "Hem"],
//    ["controller" => "..\jetty\content\a.php",  "text" => "A"],
//    ["controller" => "..\jetty\content\b.php",  "text" => "B"]
//];

$name_mcvk = preg_replace("/[^a-z\d]/i", "", __DIR__);

session_name($name_mcvk);
session_start();
