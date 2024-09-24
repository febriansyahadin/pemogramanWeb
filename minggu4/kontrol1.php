<?php

$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];


sort($nilai);


$nilai_diproses = array_slice($nilai, 2, -2);


$total_nilai = array_sum($nilai_diproses);


$rata_rata = $total_nilai / count($nilai_diproses);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: " . $total_nilai . "\n";
echo "Rata-rata nilai: " . $rata_rata . "\n";
?>
