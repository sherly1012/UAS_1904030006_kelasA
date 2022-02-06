<?php

require 'koneksi.php';
$camaba = query("SELECT * FROM data_barang");

if (isset($_POST['cari'])) {
  $camaba = cari($_POST['keyword']);
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
<section class="tabel">
<!-- pencarian data -->
<form action="" method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="masukkan keyword" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari"> Cari </button>
      </form>

      <br>
      <hr>

      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">nama barang</th>
            <th scope="col">foto </th>
            <th scope="col">stock barang</th>
            <th scope="col">harga barang</th>
            <th scope="col">Aksi</th>

          </tr>
        </thead>
        <?php if (empty($camaba)) : ?>
          <tr>
            <td colspan="4" class="alert alert-danger text-center" role="alert">
              <p><b>Mahasiswa tidak ditemukan</b></p>
            </td>
          </tr>
        <?php endif; ?>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($camaba as $cmb) : ?>
            <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $cmb['nama_barang']; ?></td>
              <td><img src="img/<?php echo $cmb['foto']; ?>" width="100px"></td>
              <td><?php echo $cmb['stock_barang']; ?></td>
              <td><?php echo $cmb['harga_barang']; ?></td>
              <td>
                <a href="edit.php?id=<?= $cmb['id'];  ?>" class="btn btn-danger" role="button">edit</a>
                <a href="hapus.php?id=<?= $cmb['id'];  ?>" class="btn btn-danger" role="button">hapus</a>
              </td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
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