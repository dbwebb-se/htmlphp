<!doctype html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Exempel navbar visa nuvarande sida</title>

    <style>
    html {
        background-color: #fff;
    }
    
    body {
        margin: 10px auto;
        padding: 10px;
        width: 800px;
        background-color: #eee;
    }
    
    .navbar {
        padding: 1em 1em 1em 0;
        background-color: #fff;
        border-top: 1px solid #9c9;
    }

    .navbar a {
        display: inline-block;
        padding: 0.5em 1em;
        border: 1px solid #999;
        text-decoration: none;
        color: #000;
    }

    .navbar a:hover {
        background-color: #eee;
        text-decoration: underline;
    }
    
    .navbar .selected {
        background-color: #ccc;
    }
    
    </style>
</head>

<body>
    
    <p>Visa nuvarande sida i navbaren.</p>
    
    <nav class="navbar">
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?>" href="me.php">Hem</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "report.php" ? "selected" : "";?>" href="report.php">Redovisning</a>
        <a class="<?= basename($_SERVER['REQUEST_URI']) == "about.php" ? "selected" : "";?>" href="about.php">Om</a>
    </nav>

    <p>Source: <a href="http://php.net/manual/en/function.basename.php">PHP basename()</a>, <a href="http://php.net/manual/en/reserved.variables.server.php">$_SERVER</a> and <a href="http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary">ternary operator</a></p>

<pre>
The PHP array $_SERVER contains information on the request.

Request URI = <?=$_SERVER['REQUEST_URI'];?>

Last part of Request URI = <?=basename($_SERVER['REQUEST_URI']);?>

Skip suffix = <?=basename($_SERVER['REQUEST_URI'], '.php');?>


We can now use an if-statement to check if a navbar item is selected
or not, or even make it a shorter version of a if-statement using
the ?: construct, known as the ternary operator.

The HTML/PHP-code goes like this.
First the HTML-part:
&lt;a class="" href="me.php"&gt;Hem&lt;/a&gt;

Then the PHP-part:
&lt;?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?&gt;

Then combined:
&lt;a class="&lt;?= basename($_SERVER['REQUEST_URI']) == "me.php" ? "selected" : ""; ?&gt;" href="me.php"&gt;Hem&lt;/a&gt;

</pre>

</body>
</html>
