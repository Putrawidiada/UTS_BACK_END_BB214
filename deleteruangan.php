<?php

$koderuangan = $_GET['koderuangan'];

//pemanggilan variabel dikoneksi
include "koneksi.php";

//syntax database
$qry = "DELETE FROM ruangan WHERE koderuangan = '$koderuangan'";
$exec = mysqli_query($con, $qry);

//cek data
if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'ruangan.php'</script>";
} else {
    echo "Data gagal dihapus";
}
