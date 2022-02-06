<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030006');

// pemanggilan tabel
function query($query)
{
  global $conn;

  // mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result)==1){
   return mysqli_fetch_assoc($result);
 } 
  // pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function komen($data)
{
  global $conn;

  $email = htmlspecialchars($data['email']);
  $komen = htmlspecialchars($data['komentar']);

  $query = "INSERT INTO komentar
VALUES
(null,'$email','$komen');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id = $data['id'];
  $nama = htmlspecialchars($data['nama_barang']);
  $stock = htmlspecialchars($data['foto']);
  $harga = htmlspecialchars($data['stock_barang']);
  $foto = htmlspecialchars($data['harga_barang']);

  $query = "UPDATE data_barang SET
  nama_barang ='$nama',
  foto='$stock',
  stock_barang ='$harga',
  harga_barang ='$foto'
  WHERE id =$id; ";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM data_barang WHERE id =$id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}