<?php

require_once 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

mysqli_query($koneksi, "INSERT INTO mahasiswa (nama, nim') VALUES ('$nama', '$nim')");

header('Location: mahasiswa. php');