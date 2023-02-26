<?php
require_once 'koneksi.php';

$data = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="#">SesukaHatiKalian</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link" href="mahasiswa.php">Mahasiswa</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">

    <!-- JUDUL -->
    <div class="row">
      <div class="col">
        <h1>Daftar Mahasiswa</h1>
      </div>
    </div>

    <!-- TOMBOL TAMBAH -->
    <div class="row">
        <div class="col">
            <a href="create.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <!-- TABEL -->
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    while($mahasiswa = mysqli_fetch_assoc($data)) : ?>
                        <tr>
                        <th scope="row"><?=$no ?></th>
                        <td><?= $mahasiswa['nama'] ?></td>
                        <td><?=$mahasiswa['nim'] ?></td>
                        <td>
                            <button class="btn btn-sm btn-info">Detail</button>
                            <button class="btn btn-sm btn-warning">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                        </tr>
                        <?php 
                        $no++;
                    endwhile; ?>
                    </tbody>
            </table>
        </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>