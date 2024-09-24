<?php

$harga_asli = 120000;


$diskon_persen = 20;


$diskon = ($diskon_persen / 100) * $harga_asli;


$harga_setelah_diskon = $harga_asli - $diskon;

echo "Harga yang harus dibayar setelah diskon: Rp " . $harga_setelah_diskon;
?>
