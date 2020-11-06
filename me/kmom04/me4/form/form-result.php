<div class="form-message">
    <p><?= $message ?></p>
</div>

<?php
//$message = $_SESSION["form-message"] ?? null;
$_SESSION["form-message"] = $message ?? null;

// Return if no message
if (!$message) {
    return;
};
