<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut Icon" href="img/favicon.ico"/>
    <?php $numFiles   = count(get_included_files());
        $memoryUsed = memory_get_peak_usage(true);
        $loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
    ?>
</head>

<body>
    <header class="site-header">
        <img src="img/logo.jpg" alt="logo" title="Vanligtvis sover Daisy vid tangentbordet"/>
        <span class="site-title">Me-Sida för Marcus Klingborg</span>
        <span class="site-slogan">Min första fina me-sida är på gång</span>
    </header>
