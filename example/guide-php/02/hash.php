<?php
include(__DIR__ . "/config.php");
include(__DIR__ . "/header.php");


$val = "Jag är Mumintrollet.";

echo "Original: ", $val, "\n";
echo "ROT13:    ", str_rot13($val), "\n";
echo "MD5:      ", md5($val), "\n";
echo "SHA1:     ", sha1($val), "\n";

$passwordHash = password_hash($val, PASSWORD_DEFAULT);
echo "password: ", $passwordHash, "\n";
echo "verify:   ", password_verify($val, $passwordHash), "\n";



include(__DIR__ . "/footer.php");
