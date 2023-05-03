<?php

$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$matakuliah = $_POST['matakuliah'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "UPDATE dosen SET 
        nama = '$nama',
        matakuliah = '$matakuliah',
        gender = '$gender',
        alamat = '$alamat',
        noHp = '$nohp',
        email = '$email'
        WHERE nidn = '$nidn'
        ";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil di update'); window.location = 'dosen.php';</script>";
} else {
    echo "Data gagal di simpan";
}
