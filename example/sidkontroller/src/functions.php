<?php
/**
 * Functions
 */
function loadTime()
{
    $timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
    $timestampLast = microtime(true);
    $diff = $timestampLast - $timestampFirst;
    return "Loadtime: " . round($diff*1000, 3) . "ms.";
}
