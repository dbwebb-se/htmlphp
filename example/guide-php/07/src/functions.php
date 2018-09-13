<?php
/**
 * Definitions of commonly used functions.
 */
function quack()
{
    //echo "The duck says quack, quack.";
    return "The duck says quack, quack.";
}



function duckSays($sound)
{
    return "The duck says {$sound}.";
}



function animalSays($animal, $sound)
{
    return "The {$animal} says {$sound}.";
}



function animalSays1($animal, $sound, $end = ".")
{
    return "The {$animal} says {$sound}{$end}";
}



// function sumValues($val1, $val2, $val3)
// {
//     $sum = $val1 + $val2 + $val3;
//     return $sum;
// }
