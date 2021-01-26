<?php

// demo.php

// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

$tokenizerFactory  = new \Sastrawi\Tokenizer\TokenizerFactory();
$tokenizer = $tokenizerFactory->createDefaultTokenizer();
// iki isien tweet mu
$tokens = $tokenizer->tokenize('Binatang ternak? Cara membunuh paling manusiawinya disembelih dengan cepat pakai pisau yang sangat tajam. Ngga ada kan sapi di peternakan tua dulu trus mati, baru dipotong-potong diambil dagingnya?');
// echo "<pre>";
// print_r($tokens);
// echo "<pre>";

include './JaroWinkler.php';

$target = "Sapi";
$candidate = $tokens;

// echo $string."<br>";
$start1 = microtime(true);
?>
<table>
    <thead>
        <tr>
            <th>candidate</th>
            <th>target</th>
            <th>S(ED)</th>
            <th>T(ED)</th>
            <th>S(JW)</th>
            <th>T (JW)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // function microtime_float()
        // {
        //     list($usec, $sec) = explode(" ", microtime());
        //     return ((float)$usec + (float)$sec);
        // }

        
        for ($a=0; $a < count($candidate); $a++) { 
            // $time_start = microtime_float();
            // $time_end = microtime_float();
            $time_start = microtime(true);
            usleep(0);
            $time_start1 = number_format(microtime(true)-$time_start,6)." seconds.";
            usleep(0);
            $time_end = number_format(microtime(true)-$time_start,6)." seconds.";
            // $time = number_format($time_start - $time_end,6);
            // echo "<br>";
            // $time_start = number_format(microtime(true),6)."seconds.";
            // Sleep for a while
            // $time[$a] = $time_end[$a] - $time_start[$a];
            ?>
                <tr>
                    <td><?php echo $candidate[$a]."<br>";?></td>
                    <td><?php echo $target."~".$candidate[$a];?></td>
                    <td><?php echo levenshtein($target, $candidate[$a]);?></td>
                    <td><?php echo $time_start1;?></td>
                    <td><?php print(JaroWinkler($target, $candidate[$a],10,20,30)) ;?></td>
                    <td><?php echo $time_end;?></td>
                </tr>
            <?php
            // echo $candidate[$a]."<br>";
            // echo $target."~".$candidate[$a];
            // echo "<br>";
            // print(Jaro($target, $candidate[$a]));
            // echo"<br>";
            // print(JaroWinkler($target, $candidate[$a]));
            // echo "<br>";
            // $candidate[$a]=strtok(' ');
        }
        // $jaroWinkler1 = $comparison ->jarowinkler('sapi', (strtolower[$i]));
        // $end1 = number_format(microtime(true)-$start1,10)."seconds.";
        ?>
    </tbody>
</table>
