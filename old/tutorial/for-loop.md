For-loop
==============================
Examples in php


```php

// Count to 10

for ($i = 0; $i < 11; $i++) {
    echo $i;
}

// Count to 10, excluding 0

for ($i = 1; $i < 11; $i++) {
    echo $i;
}

// Count to 10, excluding 0 (another version)

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

// Reverse order

for ($i = 10; $i > 0; $i--) {
    echo $i;
}


// Nested loops. Count to 9.9 with 0.1 increments starting from zero.

for ($i = 0; $i < 10; $i++){			// Count from 0 to 9
	for ($j = 0; $j < 10; $j++){		// Count from 0 to 9
		echo $i . "." . $j . "<br>";	// Add the first number(i) with a dot and then add the the other number(j). Each value on a new line (<br>).
	}
}


```



Reference and read more
------------------------------

[For-loop](http://php.net/manual/en/control-structures.for.php)



Revision history
------------------------------

2015-08-17 (lew) PA1 First try.
