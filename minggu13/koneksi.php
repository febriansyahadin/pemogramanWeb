<?php
$host= "ZANETSU";

$connInfo = array("Database" => "prakwebdb", "UID" => "", "PWD" => "");
$koneksi = sqlsrv_connect($host, $connInfo);

if ($koneksi) {
    echo "Koneksi berhasil.<br> />";
}else {
    echo "Koneksi gagal";
        die(print_r(sqlsrv_errors(), true));
}