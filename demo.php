<?php

// demo.php

// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

$tokenizerFactory  = new \Sastrawi\Tokenizer\TokenizerFactory();
$tokenizer = $tokenizerFactory->createDefaultTokenizer();
// iki isien tweet mu
$tokens = $tokenizer->tokenize('Binatang ternak? Cara membunuh paling manusiawinya disembelih dengan cepat pakai pisau yang sangat tajam. Ngga ada kan sapi di peternakan tua dulu trus mati, baru dipotong-potong diambil dagingnya?');
echo "<pre>";
print_r($tokens);
echo "<pre>";
?>