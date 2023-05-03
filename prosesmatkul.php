<?php

$kodematkul = $_POST['kodematkul'];
$namamatkul = $_POST['namamatkul'];
$sks = $_POST['sks'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$koderuangan = $_POST['koderuangan'];
$dosen = $_POST['dosen'];

include "koneksi.php";

$qry = "INSERT INTO matkul VALUES (
    '$kodematkul', '$namamatkul', '$sks', '$hari', '$jam', '$koderuangan', '$dosen'
)";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil di simpan'); window.location = 'matkul.php';</script>";
} else {
    echo "Data gagal di simpan";
}
