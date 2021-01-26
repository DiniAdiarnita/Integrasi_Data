<?php 
$start1 = microtime(true);
$jaroWinkler1 = $comparison ->jarowinkler('sapi', (strtolower[$i]));
$end1 = number_format(microtime(true)-$start1,10)."seconds.";
?>