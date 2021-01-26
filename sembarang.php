<?php
 session_start();
 $jr = $_SESSION['jaro'];
 $lv = $_SESSION['levenshtein'];

    echo "<pre>";
    print_r($jr);
    print_r($lv);
    echo "</pre>";
?>