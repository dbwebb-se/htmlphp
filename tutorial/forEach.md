Foreach
==============================
Examples in php


For each using only values.

```php
// Double the values in an array
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($arr as $value) {
    echo $value * 2 . " ";            // echoes 2 4 6 8 10 12 14 16 18 20
}
```

For each using bot key and values.

```php
// Double the values in an array
$arr = ["apple" => "green", "orange" => "yellow", "pumpkin" => "orange"];

foreach ($arr as $key => $value) {
    echo "The $key has the color $value. ";
}
```



Reference and read more
------------------------------

[Foreach](http://php.net/manual/en/control-structures.foreach.php)
