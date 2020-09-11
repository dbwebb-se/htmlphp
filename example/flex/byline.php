<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byline Example</title>
    <link rel="stylesheet" href="style/byline.css">
</head>

<body>
    <h1>Byline med hjälp utav float/flex</h1>
    <p>Style kan hittas under <code>style/byline.css</code></p>
    <p>Du kan själv se vilka regler elementen ligger på genom att använda development tools i webbläsaren, Ctrl+ShiftI (Win), Option+Command+I (Mac).</p>
    <p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">CSS-tricks erbjuder en tydlig visuell guide</a> på hur man kan jobba med flex.</p>
    <h2>Byline utan stil</h2>
    <div class="byline">
        <a href="https://s.gravatar.com/avatar/433d481f73525926b51c863a41f69d59"><img src="https://s.gravatar.com/avatar/433d481f73525926b51c863a41f69d59?s=80" alt="Niklas Andersson"></a>
        <p><strong>Niklas Andersson</strong> arbetar på BTH och undervisar, utvecklar och handleder dbwebb-kurserna. På fritiden spelar han tillsammans med ett egenstartat community vid namn Sockertoppar. Han håller sig också uppdaterad inom teknikvärlden, med stort fokus på Apple.</p>
    </div>
    <h2>Byline med float</h2>
    <code>
        .byline-float {
            overflow: auto;
        }

        .byline-float a {
            float: left;
        }
    </code>
    <div class="byline byline-float">
        <a href="https://s.gravatar.com/avatar/433d481f73525926b51c863a41f69d59"><img src="https://s.gravatar.com/avatar/433d481f73525926b51c863a41f69d59?s=80" alt="Niklas Andersson"></a>
        <p><strong>Niklas Andersson</strong> arbetar på BTH och undervisar, utvecklar och handleder dbwebb-kurserna. På fritiden spelar han tillsammans med ett egenstartat community vid namn Sockertoppar. Han håller sig också uppdaterad inom teknikvärlden, med stort fokus på Apple.</p>
    </div>
    <h2>Byline med flex</h2>
    <code>
        .byline-flex {
            display: flex;
        }
    </code>
    <div class="byline byline-flex">
        <a href="https://s.gravatar.com/avatar/433d481f73525926b51c863a41f69d59"><img src="https://s.gravatar.com/avatar/433d481f73525926b51c863a41f69d59?s=80" alt="Niklas Andersson"></a>
        <p><strong>Niklas Andersson</strong> arbetar på BTH och undervisar, utvecklar och handleder dbwebb-kurserna. På fritiden spelar han tillsammans med ett egenstartat community vid namn Sockertoppar. Han håller sig också uppdaterad inom teknikvärlden, med stort fokus på Apple.</p>
    </div>
</body>

</html>
