<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title><?= $title?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut Icon" href="img/favicon.ico"/>
    <?php $numFiles   = count(get_included_files());
        $memoryUsed = memory_get_peak_usage(true);
        $loadTime   = microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'];
    ?>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=2.0;">
</head>

<body>
    <header class="site-header">
        <img src="img/logo.jpg" alt="logo" title="Vanligtvis sover Daisy vid tangentbordet"/>
        <span class="site-title">Me-Sida för Marcus Klingborg</span>
        <span class="site-slogan">Min första fina me-sida är på gång</span>
    </header>

    <?php $uriFile = basename($_SERVER["REQUEST_URI"]); ?>
    <nav class="navbar">
        <a class="<?= $uriFile == "me.php" ? "selected" : null ?>" href="me.php">Hem</a>
        <a class="<?= $uriFile == "report.php" ? "selected" : null ?>" href="report.php">Redovisning</a>
        <a class="<?= $uriFile == "about.php" ? "selected" : null ?>" href="about.php">Om</a>
    </nav>
