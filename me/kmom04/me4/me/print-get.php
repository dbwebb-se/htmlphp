<h1>Print the coontent of $_GET</h1>

<p>The content of the PHP variable <code>$_GET</code> is<p>

<pre>
<?=htmlentities(print_r($_GET, true)); ?>
</pre>

<p>You can add items to the output by adding sections to the link. For example, try to add <code>&amp;key=value&amp;name=MegaMic</code> at the end of the link to this page, hit enter and you should then see the variables printed to this page.</p>

<p>This is one way to send arguments to a web page, and those arguments can be used by PHP to achieve various results.</p>
