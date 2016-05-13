<!doctype html>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Loop</title>

<h1>Loop</h1>
<hr>
<pre><?php

$i = 10;
do {
    echo "$i ";
    $i--;
} while ($i > 0);

echo "\n";

for ($i = 10; $i > 0; $i--) {
    echo "$i ";
}

echo "\n";

for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "\n";

$i = 10;
while ($i > 0) {
    echo "$i ";
    $i--;
    //$i += 1;
}

echo "\n";

$i = 1;
while ($i <= 10) {
    echo "$i ";
    $i++;
    //$i += 1;
}
