<?php
$a = 10;
$b = 5;

//PERTAYAAN 7
$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;   
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

//PERTAYAAN 8
echo "Hasil penjumlahan adalah $hasilTambah <br>";
echo "Hasil pengurangan adalah $hasilKurang <br> ";
echo "Hasil perkalian adalah $hasilKali<br>";
echo "Hasil pembagian adalah $hasilBagi<br>";
echo "Hasil sisaBagi adalah $sisaBagi <br>";
echo "Hasil pangkat adalah  $pangkat <br>";

//PERTAYAAN 9
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b ;

echo "<br><br>";
echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br>";

echo "Apakah hasilSama $a == $b? " . ($hasilSama ? 'Benar' : 'Salah') . "<br>";
echo "Apakah hasilTidakSama $a != $b? " . ($hasilTidakSama ? 'Benar' : 'Salah') . "<br>";
echo "Apakah hasilLebihKecil $a < $b? " . ($hasilLebihKecil ? 'Benar' : 'Salah') . "<br>";
echo "Apakah hasilLebihBesar $a > $b? " . ($hasilLebihBesar ? 'Benar' : 'Salah') . "<br>";
echo "Apakah hasilLebihKecilSama $a <= $b? " . ($hasilLebihKecilSama ? 'Benar' : 'Salah') . "<br>";
echo "Apakah hasilLebihBesarSama $a >= $b? " . ($hasilLebihBesarSama ? 'Benar' : 'Salah') . "<br>";

//PERTAYAAN 10
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "<br><br>";
echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br>";

echo "Hasil $a && $b (AND): " . ($hasilAnd ? 'Benar' : 'Salah') . "<br>";
echo "Hasil $a || $b (OR): " . ($hasilOr ? 'Benar' : 'Salah') . "<br>";
echo "HasilNotA: " . ($hasilNotA ? 'Benar' : 'Salah') . "<br>";
echo "HasilNotB: " . ($hasilNotB ? 'Benar' : 'Salah') . "<br>";

//PERTAYAAN 11
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;

echo "<br><br>";
$a = 10; 
$b = 5; 

$a += $b;
echo "Hasil \$a += \$b : {$a} <br>";

$a -= $b;
echo "Hasil \$a -= \$b : {$a} <br>";

$a *= $b;
echo "Hasil \$a *= \$b : {$a} <br>";

$a /= $b;
echo "Hasil \$a /= \$b : {$a} <br>";

$a %= $b;
echo "Hasil \$a %= \$b : {$a} <br>";

//PERTAYAAN 12
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "<br><br>";
$a = 10; 
$b = 5;  

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Nilai a: {$a} <br>";
echo "Nilai b: {$b} <br>";

echo "Apakah \$a === \$b? (Identik): " . ($hasilIdentik ? 'Benar' : 'Salah') . "<br>";
echo "Apakah \$a !== \$b? (Tidak Identik): " . ($hasilTidakIdentik ? 'Benar' : 'Salah') . "<br>";
?>