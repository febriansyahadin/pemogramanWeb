<?php
//nomer 9
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf Kecil ditemukan";
}else {
    echo "Tidak ada hurug kecil";
}

//nomer 10
echo "<br>";
$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
}else{
    echo "Tida ada yang cocok!";
}
//nomer 11
echo "<br>";
$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; //output "i like banana pie."

//nomer12
echo "<br>";
$pattern ='/[o]{1,3}/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

//nomer 13
echo "<br>";

?>