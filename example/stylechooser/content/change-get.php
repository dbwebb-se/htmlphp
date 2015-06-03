<?php
// Check if style is changed
$style = isset($_GET['style'])
    ? $_GET['style']
    : null;

// Update the session, if $style is set
if ($style !== null) {
    echo "Updated the session with '" . htmlentities($style) . "' Reload to se the change.";
    $_SESSION['stylesheet'] = $style;
}



?>
<p>You can change the value of the stylesheet, stored in session, by using the following links with $_GET.</p>

<p>Value of the current stylesheet key = '<?=$key?>'.</p>

<ul>
    <li><a href="?page=get&amp;style=default">Set the default style</a></li>
    <li><a href="?page=get&amp;style=second">Set the second style</a></li>
</ul>
