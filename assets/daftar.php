<?php
include "koneksi.php";

if (isset($_POST['upload'])) {
  $nama = $_POST['nama_lengkap'];
  $tanggal = $_POST['tanggal_lahir'];
  $alamat = $_POST['alamat'];
  $sql = "INSERT INTO data_diri (nama_lengkap, tanggal_lahir, alamat) VALUES
  ('$nama','$tanggal','$alamat')";
  $hasil = mysqli_query($koneksi,$sql);
  echo "<script>
  alert('Data berhasil di upload');
  document.location.href='daftar.php';
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">
              <img src="logo1.jpg" alt="" width="40px" height="40px" class="d-inline-block align-text-top">
                Data Penduduk Perumahan
              </a>
            </div>
          </nav>
    </div>
    <!-- Input Data     -->
    <div class="container mt-5">
        <legend>Lengkapi Data Diri Anda</legend>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
              <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" id="exampleInputPassword1">
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Alamat Lengkap</label>
              <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">  
            </div>
            <input type="submit" name="upload" value="Sumbit" class="btn btn-primary">
          </form>
    </div>
</body>
</html>