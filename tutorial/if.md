If, elif, else
==============================
Examples in php


```php

// Do something if a variable has a certain value

$myValue = 50;

if ($myValue > 30) {
    echo "larger than 30";
}

$myString = "word";

if ($myString === "word") {
    echo "Equal.";
}

// Add an else-statement

if ($myString === "word") {
    echo "Equal.";
} else {
    echo "Not equal.";
}

// Add many if tests

if ($myString === "word") {
    echo "Equal.";
} else if ($myString === 56) {
    echo "Not a word";
} else if ($myString === "changeMe") {
    $myString = "Changed.";
} else {
    echo "No statement fits.";
}



```



Reference and read more
------------------------------

[if Statements](http://php.net/manual/en/control-structures.if.php)



Revision history
------------------------------

2015-08-17 (lew) PA1 First try.
