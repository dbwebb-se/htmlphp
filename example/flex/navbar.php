<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <link rel="stylesheet" href="style/navbar.css">
</head>

<body>
    <h1>Navbar med hjälp utav float/flex</h1>
    <p>Style kan hittas under <code>style/navbar.css</code></p>
    <p>Du kan själv se vilka regler elementen ligger på genom att använda development tools i webbläsaren, Ctrl+ShiftI (Win), Option+Command+I (Mac).</p>
    <p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">CSS-tricks erbjuder en tydlig visuell guide</a> på hur man kan jobba med flex.</p>
    <h2>Navbar utan stil</h2>
    <nav class="navbar">
        <a href="#">Link1</a>
        <a href="#">Link2</a>
        <a href="#">Link3</a>
    </nav>
    <h2>Navbar med float</h2>
    <code>
        .navbar-float {
        overflow: auto;
        }

        .navbar-float a {
        width: 33%;
        float: left;
        }
    </code>
    <nav class="navbar navbar-float">
        <a href="#">Link1</a>
        <a href="#">Link2</a>
        <a href="#">Link3</a>
    </nav>
    <h2>Navbar med flex</h2>
    <code>
        .navbar-flex {
        display: flex;
        justify-content: space-around;
        }

        .navbar-flex a {
        width: 33%;
        }
    </code>
    <nav class="navbar navbar-flex">
        <a href="#">Link1</a>
        <a href="#">Link2</a>
        <a href="#">Link3</a>
    </nav>
</body>

</html>
