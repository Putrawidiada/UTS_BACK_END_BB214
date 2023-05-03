<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!--CSS-->
  <link rel="stylesheet" href="style.css" />
  <!--font awesome-->
  <script src="https://kit.fontawesome.com/4654690b34.js" crossorigin="anonymous"></script>
</head>

<body>
  <!--start navbar and sidebar-->
  <nav class="navbar sticky-top nvbr">
    <div class="container-fluid">
      <!--burger button-->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--center menu-->
      <div class="justify-content-center">
        <div class="d-flex navbar">
          <div class="px-2 flex-fill">
            <a class="nav-link" href="matkul.php">Matakuliah</a>
          </div>
          <div class="px-2 flex-fill">
            <a class="nav-link fw-bold" href="dosen.php">Dosen</a>
          </div>
          <div class="px-2 flex-fill">
            <a class="nav-link" href="ruangan.php">Ruangan</a>
          </div>
          <div class="px-2 flex-fill">
            <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-end">
        <!--profile pic-->
        <a class="ml-2">
          <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" class="rounded-circle" height="35" width="35" alt="pp" />
        </a>
      </div>
      <!--off canvas-->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <!--header-->
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <!--searchbox-->
        <div class="container">
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-dark" type="submit">Search</button>
          </form>
        </div>
        <!--dropwodwn-->
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="register-page.html">Logout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--end navbar and sidebar-->

  <main>
    <!--start content-->
    <div class="container flex vh-100">
      <section class="py-5">
        <!--1-->
        <div class="row align-items-center">
          <div class="col-md-6">
          <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
          <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_jcikwtux.json"  background="transparent"  speed="1"  style="width: 600px; height: 500px;"  loop autoplay></lottie-player>
          </div>

            <hr />
          </div>
        </div>
      </section>
    </div>
  </main>
  <section>
    <div class="container">
      <div class="row">
        <form action="prosesdosen.php" method="POST" class="container" id="needs-validation" novalidate>
          <!--input email-->
          <div class="form-group mb-4">
            <label for="exampleInputEmail1">Alamat Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
          </div>
          <!--input nidn-->
          <div class="form-group mb-4">
            <label for="exampleInputPassword1">NIDN</label>
            <input name="nidn" type="number" class="form-control" name="email" required />
          </div>
          <!--input nama-->
          <div class="form-group mb-4">
            <label for="exampleInputPassword1">Nama Lengkap</label>
            <input name="nama" type="text" class="form-control" id="exampleInputPassword1" />
          </div>
          <div class="row">
            <!--input matkul yg diajar-->
            <div class="col-md-6 mb-3">
              <label for="exampleInputPassword1">Matakuliah Diampu</label>
              <input name="matakuliah" type="text" class="form-control" id="exampleInputPassword1" />
            </div>
            <!--input gender-->
            <div class="col-md-6 mb-3">
              <label for="validationCustom05">Jenis Kelamin</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" />
                <label class="form-check-label" for="flexRadioDefault1" value="1">
                  Laki-laki
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked />
                <label class="form-check-label" for="flexRadioDefault2" value="2">
                  Perempuan
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <!--input alamat-->
            <div class="col-md-6 mb-3">
              <label for="validationCustom01">Alamat</label>
              <input name="alamat" type="text" class="form-control" id="validationCustom01" required />
            </div>
            <!--input nohp-->
            <div class="col-md-6 mb-3">
              <label for="exampleInputPassword1">No HP</label>
              <input name="noHp" type="text" class="form-control" id="exampleInputPassword1" />
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
    </div>
  </section>
  <!--start tabel-->
  <section>
    <table class="table container mt-4">
      <thead>
        <tr>
          <th scope="col">NIDN</th>
          <th scope="col">Nama</th>
          <th scope="col">Matakuliah Diampu</th>
          <th scope="col">Gender</th>
          <th scope="col">Alamat</th>
          <th scope="col">No HP</th>
          <th scope="col">Email</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <?php
      include "koneksi.php";
      $qry = "SELECT * FROM dosen";
      $exec = mysqli_query($con, $qry);
      while ($data = mysqli_fetch_assoc($exec)) {
      ?>
        <tr>
          <td><?= $data['nidn'] ?></td>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['matakuliah'] ?></td>
          <td><?= $data['gender'] == 1 ? "Laki-Laki" : "Perempuan" ?></td>
          <td><?= $data['alamat'] ?></td>
          <td><?= $data['noHp'] ?></td>
          <td><?= $data['email'] ?></td>
          <td>
            <a href="editdosen.php?nidn=<?= $data['nidn'] ?>"><button>Edit</button></a>
            <a href="deletedosen.php?nidn=<?= $data['nidn'] ?>"><button>Delete</button></a>
          </td>
        </tr>
      <?php } ?>
    </table>
    <!--end tabel-->
    <div class="container flex justify-content-center"></div>
  </section>
  <!--end content-->

  <!-- start footer -->
  <footer class="text-center text-lg-start text-white fter">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Contact:</span>
      </div>
      <!-- Left -->
      <!-- Right -->
      <div>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="#" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
    <!-- Section: Links  -->
    <section>
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="fw-bold mb-4">NIM</h6>
            <p>
              <a href="#" class="text-reset">210040092</a>
            </p>
            <p>
              <a href="#" class="text-reset">210040126</a>
            </p>
            <p>
              <a href="#" class="text-reset">210040167</a>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Nama Kelompok</h6>
            <p>
              <a href="#" class="text-reset">Komang Adi</a>
            </p>
            <p>
              <a href="#" class="text-reset"> Ketut Arta </a>
            </p>
            <p>
              <a href="#" class="text-reset">Kadek Putra </a>
            </p>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <a href="#" id="scroll-to-top" class="text-reset">Scroll to top</a>
            
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> Bali, Indonesia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              aswa@gmail.com
            </p>
            <p>
              <i class="fas fa-brands fa-whatsapp me-3"></i> 0868-9865-8975
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
  <!-- end footer -->
  <!--lottiefiles script-->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>