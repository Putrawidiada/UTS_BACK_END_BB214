<?php

$kodematkul = $_GET['kodematkul'];

include "koneksi.php";
$qry = "DELETE FROM matkul WHERE kodematkul = '$kodematkul'";
$exec = mysqli_query($con, $qry);

if ($exec) {
    echo "<script>alert('Data berhasil dihapus'); window.location = 'matkul.php'</script>";
} else {
    echo "Data gagal dihapus";
}
