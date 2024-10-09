<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text = "This is a sample text.";
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan! <br>";
} else {
    echo "Tidak ada huruf kecil! <br>";
}

$pattern = '/[0-9]/'; //cocokkan huruf kecil
$text = "This are 123 apples.";
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie. ';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>"; //output i like banana pie

$pattern = '/go?d/'; //cocokkan "god, "good", "gooood", dll
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}

$pattern = '/gonmd/'; //cocokkan "god, "good", "gooood", dll
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>";
} else {
    echo "Tidak ada yang cocok!<br>";
}
