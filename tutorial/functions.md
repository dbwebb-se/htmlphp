Functions
==============================
Examples in php


```php

// basic function structure, without parameters

function speak ()
{
    echo "Hello!";
}

speak(); // Echoes "Hello!"

// basic function structure, with parameters

function speak ($word)
{
    echo $word;
}

speak("Greetings!"); // Echoes "Greetings!"

// function with multiple parameters

function speak ($name, $word)
{
    echo "Hi " . $name . "! I feel " . $word . "!";
}

speak("Dave", "fine"); // Echoes "Hi Dave! I feel fine!"

// function with return

function sumNumbers ($numberOne, $numberTwo)
{
    return $numberOne + $numberTwo;
}

echo sumNumbers(5, 25); // Echoes 30


```



Reference and read more
------------------------------

[Functions](http://php.net/manual/en/language.functions.php)



Revision history
------------------------------

2015-08-17 (lew) PA1 First try.
