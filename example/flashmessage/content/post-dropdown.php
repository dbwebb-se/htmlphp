<?php
// Check if style is changed
$style = isset($_POST['style'])
    ? $_POST['style']
    : null;
    
if ($style !== null) {
    echo "Updated the session with '" . htmlentities($style) . "' Reload to se the change.";
    $_SESSION['stylesheet'] = $style;
}



?>
<p>Using POST with the form.</p>

<p>Value of the current stylesheet key = '<?=$key?>'.</p>

<form method="post" action="?page=post-dropdown">

    <label>Select the stylesheet.<br>
        <select name="style">
            <option value="default">Default style</option>
            <option value="second">Second style</option>
        </select>
    </label>

    <input type="submit" name="doIt" value="Change the stylesheet">

</form>
