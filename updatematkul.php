<?php

$kodematkul = $_POST['kodematkul'];
$namamatkul = $_POST['namamatkul'];
$sks = $_POST['sks'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$koderuangan = $_POST['koderuangan'];
$dosen = $_POST['dosen'];

include "koneksi.php";

$qry = "UPDATE matkul SET 
        namamatkul = '$namamatkul',
        sks = '$sks',
        hari = '$hari',
        jam = '$jam',
        koderuangan = '$koderuangan',
        dosen = '$dosen'
        WHERE kodematkul = '$kodematkul'
        ";

$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil di update'); window.location = 'matkul.php';</script>";
} else {
    echo "Data gagal di simpan";
}
