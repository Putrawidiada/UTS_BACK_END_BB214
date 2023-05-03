<?php
$nim = $_GET['nim'];
include "koneksi.php";

$qry = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/4654690b34.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container vh-100 flex align-items-center justify-content-center">
    <form action="updatemahasiswa.php" method="POST" class="container" id="needs-validation" novalidate>
      <!--input email-->
      <div class="form-group mb-4">
        <label for="exampleInputEmail1">Email address</label>
        <input value="<?= $data['email'] ?>" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email" />
      </div>
      <!--input nim-->
      <div class="form-group mb-4">
        <label for="exampleInputPassword1">NIM</label>
        <input value="<?= $data['nim'] ?>" readonly name="nim" type="number" class="form-control" name="email" required placeholder="Masukan NIM" />
      </div>
      <!--input nama-->
      <div class="form-group mb-4">
        <label for="exampleInputPassword1">Nama Lengkap</label>
        <input value="<?= $data['nama'] ?>" name="nama" type="text" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nama" />
      </div>
      <div class="row">
        <!--input jurusan-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Jurusan</label>
          <select name="jurusan" class="form-select" aria-label="Default select example">
            <option selected>Klik Untuk Pilih</option>
            <option value="001">Teknologi Informasi</option>
            <option value="002">Sistem Informasi</option>
            <option value="003">Sistem Komputer</option>
            <option value="004">Bisnis Digital</option>
          </select>
        </div>
        <!--input nohp-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom02">No HP</label>
          <input value="<?= $data['nohp'] ?>" name="nohp" type="number" class="form-control" id="validationCustom02" placeholder="Masukann No HP" required />
        </div>
      </div>
      <div class="row">
        <!--input alamat-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Alamat</label>
          <input value="<?= $data['alamat'] ?>" name="alamat" type="text" class="form-control" id="validationCustom01" placeholder="Masukan Alamat" required />
        </div>
        <!--input gender-->
        <div class="col-md-6 mb-3">

          <label for="validationCustom05">Jenis Kelamin</label>
          <div class="form-check">
            <?php
            if ($data['gender'] == 1) {
            ?>
              <input type="radio" name="gender" value="1" checked> Laki-laki
              <input type="radio" name="gender" value="2"> Perempuan
            <?php } else { ?>
              <input type="radio" name="gender" value="1"> Laki-laki
              <input type="radio" name="gender" value="2" checked> Perempuan
            <?php } ?>
          </div>
        </div>
      </div>
      <!--button-->
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