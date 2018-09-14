<?php
// Check if style is changed
$style = isset($_GET['style'])
    ? $_GET['style']
    : null;
    
if ($style !== null) {
    echo "Updated the session with '" . htmlentities($style) . "' Reload to se the change.";
    $_SESSION['stylesheet'] = $style;
}



?>
<p>You can change the value of the stylesheet, stored in session, by using the following dropdown.</p>

<p>Value of the current stylesheet key = '<?=$key?>'.</p>

<form>

    <input type="hidden" name="page" value="dropdown">

    <label>Select the stylesheet.<br>
        <select name="style">
            <option value="default">Default style</option>
            <option value="second">Second style</option>
        </select>
    </label>
    
    <input type="submit" name="doIt" value="Change the stylesheet">
    
</form>
