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


?><h1>Select the style (auto submit)</h1>

<p>This is an auto submitting form, it submits the form when the user changes the value in the select/option. It uses a tiny bit of JavaScript to submit the form.</p>

<form method="post" action="?page=form-process">

    <fieldset>
        <legend>Select the style</legend>
        <input type="hidden" name="redirect" value="?page=form-auto">

        <p><label>Style:<br>
            <select name="stylechooser" onchange="this.form.submit();">
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

    </fieldset>

</form>
