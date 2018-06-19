<?php 

/**
 * Check what day it is and return dayname together with a 
 * day feeling.
 *
 * @param int $day Use this as a day, or check current day.
 *
 * @return array with dayname and dayfeeling.
 */
function isFriday($day = null)
{
    if ($day < 1 || $day > 7) {
        $day = date("w");
    }

    if (is_null($day)) {
        $day = date("w");
    }

    $dayDetails = [
        1 => ["name" => "måndag",    "feeling" => "..."],
        2 => ["name" => "tisdag",    "feeling" => null],
        3 => ["name" => "onsdag",    "feeling" => "*nice*"],
        4 => ["name" => "torsdag",   "feeling" => null],
        5 => ["name" => "fredag",    "feeling" => "!!!"],
        6 => ["name" => "lördag",    "feeling" => null],
        7 => ["name" => "söndag",    "feeling" => "*vila*"],
    ];

    return [
        $dayDetails[$day]["name"],
        $dayDetails[$day]["feeling"],
    ];
}






/*
$dayName    = $res["name"];
$dayFeeling = $res["feeling"];




/*
$dayFeelings = [
    
    null,
    "*nice*",
    null,
    "!!!",
    null,
    "*vila*",
];


/*
switch ($day) {
    case 1:
        $dayName = "måndag";
        $dayFeeling = "...";
        break;
    
    case 2:
        $dayName = "tisdag";
        break;
        
    case 3:
        $dayFeeling = "*nice*";
        $dayName = "onsdag";
        break;
        
    case 4:
        $dayName = "torsdag";
        break;

    case 5:
        $dayFeeling = "!!!";
        $dayName = "fredag";
        break;

    case 6:
        $dayName = "lördag";
        break;

    case 7:
        $dayFeeling = "*vila*";
        $dayName = "söndag";
        break;

    default:
        $dayName = "";
        $dayFeeling = "bry mig inte";
        break;
}


/*
if ($day == 1) {
    $dayName = "måndag";
} elseif ($day == 2) {
    $dayName = "tisdag";
} elseif ($day == 3) {
    $dayFeeling = "*nice*";
    $dayName = "onsdag";
} elseif ($day == 4) {
    $dayName = "torsdag";
} elseif ($day == 5) {
    $dayFeeling = "!!!";
    $dayName = "fredag";
} elseif ($day == 6) {
    $dayName = "lördag";
} elseif ($day == 7) {
    $dayFeeling = "*vila*";
    $dayName = "söndag";
} else {
    $dayName = "";
    $dayFeeling = "bry mig inte";
}

/*
$dayName = "";
$dayFeeling = "bry mig inte";

if ($day == 5) {
    $dayFeeling = "!!!";
    $dayName = "fredag";
}



/*
if ($day == 1) {
    $dayName = "måndag";
} elseif ($day == 2) {
    $dayName = "tisdag";
} elseif ($day == 3) {
    $dayFeeling = "*nice*";
    $dayName = "onsdag";
} elseif ($day == 4) {
    $dayName = "torsdag";
} elseif ($day == 5) {
    $dayFeeling = "!!!";
    $dayName = "fredag";
} elseif ($day == 6) {
    $dayName = "lördag";
} elseif ($day == 7) {
    $dayFeeling = "*vila*";
    $dayName = "söndag";
} else {
    
}

//echo "<p>Idag är det dagen nummer $day.";

/*
$monday = 1;
$friday = 5;

if ($day == $monday) {
    echo "<p>Yippekaye ... Det är måndag idag...";
} elseif ($day == $friday) {
    echo "<p>Yippekaye ... Det är fredag idag!!!";
}
*/
/*
if ($day == $monday) {
    echo "<p>Yippekaye ... Det är måndag idag...";
}

//$day = 5;

if ($day == $friday) {
    echo "<p>Yippekaye ... Det är fredag idag!!!";
}
*/
