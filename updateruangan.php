<?php

$koderuangan = $_POST['koderuangan'];
$namaruangan = $_POST['namaruangan'];
$kapasitas = $_POST['kapasitas'];


include "koneksi.php";

$qry = "UPDATE ruangan SET 
        namaruangan = '$namaruangan',
        kapasitas = '$kapasitas'
        WHERE koderuangan = '$koderuangan'
        ";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil di update'); window.location = 'ruangan.php';</script>";
} else {
    echo "Data gagal di simpan";
}
