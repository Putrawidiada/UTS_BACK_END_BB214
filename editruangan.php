<?php
$koderuangan = $_GET['koderuangan'];
include "koneksi.php";


$qry = "SELECT * FROM ruangan WHERE koderuangan = '$koderuangan'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>

<?php
$koderuangan = $_GET['koderuangan'];
include "koneksi.php";

$qry = "SELECT * FROM ruangan WHERE koderuangan = '$koderuangan'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Ruangan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/4654690b34.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container vh-100 flex align-items-center justify-content-center">
    <form action="updateruangan.php" method="POST" class="container" id="needs-validation" novalidate>
      <div class="row">
        <!--input kode ruangan-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Kode Ruangan</label>
          <input value="<?= $data['koderuangan'] ?>" readonly name="koderuangan" type="number" class="form-control" id="validationCustom01" required />
        </div>
        <!--input nama ruangan-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Kapasita</label>
          <input value="<?= $data['kapasitas'] ?>" name="kapasitas" type="number" class="form-control" id="validationCustom01" required />
        </div>
      </div>
      <div class="row">
        <!--input kapasitas-->
        <div class="col-md-6 mb-3">
          <label for="validationCustom01">Nama Ruangan</label>
          <input value="<?= $data['namaruangan'] ?>" name="namaruangan" type="text" class="form-control" id="validationCustom01" required />
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