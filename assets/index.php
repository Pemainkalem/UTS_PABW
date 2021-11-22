<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penduduk Perumahan</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <!-- navbar -->
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
    <!-- Label -->
    <div class="mt-5">
      <figure class="text-center">
        <blockquote class="blockquote">
          <p>Selamat Datang di Beranda Perumahan Asri Sejahtera</p>
        </blockquote>
        <figcaption class="blockquote-footer">
          Perumahan Modern Pertama di Sukabumi <cite title="Source Title">Source Title</cite>
        </figcaption>
      </figure>
    </div>
    <!-- contain -->
    <div>
        <a href="daftar.php">
            <button type="button" class="btn btn-secondary position-absolute top-50 start-50">Daftar Lokasi</button>
        </a>   
        <button type="button" class="btn btn-info position-absolute top-50 end-50"data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cari Lokasi</button>

    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Masukan Data yang ingin dicari</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <table class="table table-bordered">
                    <tr>
                        <th>no</th>
                        <th>Nama Lengkap</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat Lengkap</th>
                    </tr>
                    <?php
                    include "koneksi.php";
                    $query =mysqli_query($koneksi,"SELECT * FROM data_diri ORDER BY id DESC");
                    ?>
                     <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama_lengkap"];?></td>
            <td><?php echo $data["tanggal_lahir"];?></td>
            <td><?php echo $data["alamat"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
                    <tr>
                        <td></td>
                    </tr>
                  </table>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
  
</body>
</html>