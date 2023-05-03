<?php
$kodematkul = $_GET['kodematkul'];
include "koneksi.php";

$qry = "SELECT * FROM matkul WHERE kodematkul = '$kodematkul'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Matkul</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/4654690b34.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container vh-100 flex align-items-center justify-content-center">
    <form action="updatematkul.php" method="POST" class="container" id="needs-validation" novalidate>
      <div class="row">
        <!--input kode matkul-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Kode Matkul</label>
          <input value="<?= $data['kodematkul'] ?>" readonly name="kodematkul" type="text" class="form-control" id="validationCustom01" required />
        </div>
        <!--input nama matkul-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Nama Matkul</label>
          <input value="<?= $data['namamatkul'] ?>" name="namamatkul" type="text" class="form-control" id="validationCustom01" required />
        </div>
      </div>
      <div class="row">
        <!--input sks-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">SKS</label>
          <input value="<?= $data['sks'] ?>" name="sks" type="text" class="form-control" id="validationCustom01" required />
        </div>
        <!--input hari-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Hari</label>
          <input value="<?= $data['hari'] ?>" name="hari" type="text" class="form-control" id="validationCustom01" required />
        </div>
      </div>
      <div class="row">
        <!--input jam-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Jam</label>
          <input value="<?= $data['jam'] ?>" name="jam" type="text" class="form-control" id="validationCustom01" required />
        </div>
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Kode Ruangan</label>
          <input value="<?= $data['koderuangan'] ?>" name="koderuangan" type="text" class="form-control" id="validationCustom01" required />
        </div>
      </div>
      <div class="row">
        <!--input dosen-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Dosen Pengampu</label>
          <input value="<?= $data['dosen'] ?>" name="dosen" type="text" class="form-control" id="validationCustom01" required />
        </div>
      </div>
      <div class="row container justify-content-center">
        <!--button-->
        <button input type="submit" value="simpan" class="btn btn-block mt-2 bg-primary btn-dark" role="button" style="width: 50%">
          Simpan
        </button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>