<?php
if (getLoggedInUser() === false) {
    die("Du måste vara inloggad för att se denna sidan.");
};

?>
<h1>Skyddad sida</h1>

<p>Visas enbart om du är inloggad, och det är du!<p>
