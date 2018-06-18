Switch
==============================
Examples in php


```php

// Basic structure of switch statement

$i = 3;

switch ($i) {               // $i is the variable to perform the checks on
    case 1:                 // each "case" checks for a match with $i
        echo "i = 1";
        break;              // breaks statement if a match is found
    case 2:
        echo "i = 2";
        break;
    case 3:
        echo "i = 3";
        break;
    default:                // default is triggered if no match is found
        echo "Not valid";
        break;
}

// Another example of usage

$fruit = "banana";

switch ($fruit) {
    case "apple":
        echo "green or red";
        break;
    case "banana":
        echo "yellow";
        break;
    case "orange":
        echo "orange...";
        break;
    case "plum":
        echo "purple-ish";
        break;
    default:
        echo "Not a fruit in my list.";
        break;
}

```



Reference and read more
------------------------------

[Switch](http://php.net/manual/en/control-structures.switch.php)



Revision history
------------------------------

2015-08-17 (lew) PA1 First try.
