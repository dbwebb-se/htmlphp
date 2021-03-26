<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php $numFiles   = count(get_included_files());
        $memoryUsed = memory_get_peak_usage(true);
        $loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
    ?>
</head>

<body>
    <header class="site-header">
        <span class="site-title">Jetty</span>
        <span class="site-slogan">This is the Jetty!</span>
    </header>
