<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik <70) {
    echo "Nilai huruf: D";
}

//PERTAYAAN 15
echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

//PERTAYAAN 16
echo "<br>";
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahperTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
   $jumlahBuah += ($tanamanPerlahan * $buahperTanaman);
}

echo"Jumlah buah yang akan di panen adalah: $jumlahBuah";

//pertayaan 17
echo "<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;

}
echo "Total skor ujian adalah: $totalSkor";

//pertayaan 18
echo "<br>";
$nilaiSiswa = [ 85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidal Lulus) <br>";
        continue;
    }
    echo " Nilai: $nilai (Lulus) <br>";
}
?>