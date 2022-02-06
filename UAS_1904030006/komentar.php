<?php


  require 'koneksi.php';
  $datbar = query("SELECT * FROM komentar");
  if (isset($_POST['tambah'])) {
  if (komen($_POST) > 0) {
      echo
      "<script>
      alert('data berhasil ditambah');
      document.location.href = 'komentar.php';
      </script>";
  } else {
      echo
      "<script>
      alert('data gagal ditambah');
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
            
<!--komentar-->
  <section id="komen">
      <div class="container">
      <div class="row text-center mb-3">
          <div class="col">
          <h2><b>Kritik Dan Saran</b></h2>
          </div>
      </div>
      <div class="row justify-content-center">
          <div class="col-md-4">
          <form method="POST" action="">
              <div class="mb-3">
              <label for="email" class="form-label"><b> email </b></label>
              <input type="text" class="form-control" id="email" placeholder="name@gmail.com" name="email">
              </div>
              <div class="mb-3">
              <label for="komen" class="form-label"><b>Tulis komentar</b></label>
              <textarea class="form-control" id="komen" rows="3" placeholder="Tulis Komentar" name="komentar"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="tambah"><b>Simpan</b></button>
          </form>
          </div>
      </div>
      </div>
      <br>
  </section>
  <!-- preview komen -->
  <div class="prev-comments">
      <?php

      $sql = "SELECT * FROM komentar";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
          <div class="single-item">
          <table border="1" width="650px" align="center" cellpadding="5">
              <tr>
              <td>
                  <h6><b><?php echo $row['email']; ?></b></h6>
                  <p>"<b> <?php echo $row['komentar']; ?></b>"</p>
              </td>
              </tr>
          </table>
          </div>
          <?php
      }
    }
          
          ?>
  </div>
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