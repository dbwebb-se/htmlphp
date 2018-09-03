<h1>Generate business card</h1>

<p>This page uses the querystring ($_GET) to generate a business card. Here is a <a href="?page=generate-card&amp;name=Mikael+Roos&amp;title=Mega+Vice+President&amp;address=<?= urlencode("Munksjön, Penthouse") ?>&amp;city=<?= urlencode("Jönköping") ?>&amp;image=<?= urlencode("http://dbwebb.se/image/mikael-roos/me-1.jpg&w=100") ?>">sample url that generates a business card</a>.</p>

<div class="businesscard">
    <img src="<?= htmlentities($_GET["image"] ?? null) ?>" alt="Image">
    <p class="name"><?= htmlentities($_GET["name"] ?? "No name") ?></p>
    <p class="title"><?= htmlentities($_GET["title"] ?? "No title") ?></p>
    <p class="address"><?= htmlentities($_GET["address"] ?? "No address") ?></p>
    <p class="city"><?= htmlentities($_GET["city"] ?? "No city") ?></p>
</div>

<output>
<p>The <code>$_GET</code> contains:</p>
<pre>
<?= htmlentities(print_r($_GET, 1)) ?>
</pre>
</output>
