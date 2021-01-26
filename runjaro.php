<?php
include './JaroWinkler.php';


$target = "MARTHA";
$candidate = "MARHTA";

echo "Menghitung Similiary Menggunakan Jaro-Winkler";
echo "<br>";
    
echo "s1 = ".$target;
echo "<br>";
echo "s2 = ".$candidate;
echo "<br>";

echo "Jaro distance = ";
print(Jaro($target, $candidate));

echo "<br>";

echo "Jaro-Winklre distance = ";
print(JaroWinkler($target, $candidate));
echo"<br><br>";

echo "Dini pengennya kayak gini";
echo "<br>";
echo $target."~".$candidate;
echo "<br>";
print(Jaro($target, $candidate));
echo"<br>";
print(JaroWinkler($target, $candidate));
?>