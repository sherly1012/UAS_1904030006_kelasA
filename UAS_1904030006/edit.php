<?php

require 'koneksi.php';

$id = $_GET['id'];
$camaba = query("SELECT * FROM data_barang WHERE id = $id");
//var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil di edit');
    document.location.href = 'barang.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal di edit');
    </script>";
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> HIJAB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
    <body>
        <div class="navbar">
            <section class = "navbar">
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="">
                    HIJABKU | Haraka
                  </a>
                </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                      <div class="collapse navbar-collapse text-right"  id="navbarText">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                              <a class="nav-link" href="view.php">Menu</a>
                          </li>  
                        <li class="nav-item">
                            <a class="nav-link"  href="barang.php">Data Barang</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="komentar.php">Menu Komentar</a>
                          </li>
                          
                        </ul>
                      </div>
                </div>
              </nav>
            </section>
</div>

<!-- tabel -->
      <!-- konten -->
      <section class="konten">
        <div class="container">
      <h3><i class="fas fa-users"></i> Edit data barang </h3>
      <br>
      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $camaba['id'] ?>" name="id">

        <div class="form-group">
          <label for="nama_barang">Nama barang : </label>
          <input type="text" class="form-control" id="nama_barang" value="<?= $camaba['nama_barang'] ?>" placeholder="nama lengkap" name="nama_barang" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Foto">Foto : </label>
          <input type="text" class="form-control" id="Foto" value="<?= $camaba['foto'] ?>" placeholder="alamat lengkap" name="foto" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Stock">Stok : </label>
          <input type="text" class="form-control" id="Stock" value="<?= $camaba['stock_barang'] ?>" placeholder="jenis kelamin" name="stock_barang" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="Harga">Harga : </label>
          <input type="text" class="form-control" id="Harga" value="<?= $camaba['harga_barang'] ?>" placeholder="agama anda" name="harga_barang" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
      </form>


    </div>
  </div>
</div>
</section>
    </body>
  </head>
             

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>