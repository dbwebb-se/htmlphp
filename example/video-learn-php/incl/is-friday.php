<?php 

$day = date("w");
$day = 8;

switch ($day) {
    case 1:
        $dayName = "måndag";
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
