<?php
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$matakuliah = $_POST['matakuliah'];
$gender = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$noHp = $_POST['noHp'];
$email = $_POST['email'];



include "koneksi.php";

$qry = "INSERT INTO dosen VALUES ('$nidn','$nama','$matakuliah','$gender','$alamat','$noHp','$email')";


$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('data berhasil di simpan');window.location = 'dosen.php';</script>";
} else {
    echo "data gagal di simpan";
}
