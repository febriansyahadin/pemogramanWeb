<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai siswa yang lulus: ". implode(", ", $nilaiLulus);

//pertayaan 23
echo "<br><br>";
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eve', 6],
];

$karyawanPengalamanLimaTahun = [];
foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}
echo "Daftar karyawan dengan pengalaman kerja lebih dari lima tahun: " . implode(", ", $karyawanPengalamanLimaTahun);

//pertayaan 24
echo "<br><br>";
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}

//pertayaan 25
echo "<br><br>";

$daftarNilai = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 92],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 64],
    ['nama' => 'Eva', 'nilai' => 90],
];


$totalNilai = 0;
foreach ($daftarNilai as $siswa) {
    $totalNilai += $siswa['nilai'];
}
$rataRata = $totalNilai / count($daftarNilai);

echo "Rata-rata kelas: $rataRata <br><br>";

echo "Siswa yang nilainya di atas rata-rata:<br>";
foreach ($daftarNilai as $siswa) {
    if ($siswa['nilai'] > $rataRata) {
        echo "Nama: {$siswa['nama']}, Nilai: {$siswa['nilai']}<br>";
    }
}

?>