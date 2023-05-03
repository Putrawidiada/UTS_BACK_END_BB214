<?php
$koderuangan = $_POST['koderuangan'];
$namaruangan = $_POST['namaruangan'];
$kapasitas = $_POST['kapasitas'];



include "koneksi.php";

$qry = "INSERT INTO ruangan VALUES ('$koderuangan','$namaruangan','$kapasitas')";


$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('data berhasil di simpan');window.location = 'ruangan.php';</script>";
} else {
    echo "data gagal di simpan";
}
