
</pre>

<footer>
<pre>

<?php

$timestampFirst = $_SERVER["REQUEST_TIME_FLOAT"];
echo "Start: $timestampFirst\n";

$timestampLast = microtime(true);
echo "End: $timestampLast\n";

$diff = $timestampLast - $timestampFirst;
echo "Diff: $diff\n";

$diffMs = round($diff * 1000, 3);
echo "Diff: $diffMs ms.\n";

$filesIncluded = get_included_files();
$numFiles = count($filesIncluded);
echo "Files included: $numFiles\n";

$memoryMax = memory_get_peak_usage();
$memoryCurrent = memory_get_usage();
$memoryLimit = ini_get("memory_limit");
echo "Memory\n";
echo "Max: $memoryMax\n";
echo "Current: $memoryCurrent\n";
echo "Limit: $memoryLimit\n";

?>

</pre>
</footer>
</html>
