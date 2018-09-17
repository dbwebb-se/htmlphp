<?php
/**
 * Show a form for the stylechooser and check the current selected choice
 * in the select option, therefore it is easier to generate the options
 * from an php array, it makes it easier to check for current selected choice.
 */
$options = [
    "-1" => "Select a style...",
    "light" => "Light (default)", 
    "color" => "Colorful",
    "dark" => "Dark",
];


?><h1>Select the style</h1>

<p>The form posts to a processing page that stores the selected value in the session. The form displays the current active choice, if any is made.</p>

<form method="post" action="?page=form-process">

    <fieldset>
        <legend>Select the style</legend>
        <input type="hidden" name="redirect" value="?page=form">

        <p><label>Style:<br>
            <select name="stylechooser">
                <?php foreach ($options as $key => $option) :
                    $tylee = $_SESSION["style"] ?? null;
                    $selected = null;
                    if ($key === $style) {
                        $selected = "selected=\"selected\"";
                    } ?>
                    <option <?= $selected ?> value="<?= $key ?>"><?= $option ?></option>
                <?php endforeach; ?>
           </select>
        </label></p>

        <input type="submit" name="doit" value="Select">

    </fieldset>

</form>
