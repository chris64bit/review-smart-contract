<?php
include("config.php");

$tempdir = "solidity/";

if (!file_exists($tempdir))
    mkdir($tempdir, 0755);


$target_path = $tempdir . basename($_FILES['filegambar']['name']);

$nama_gambar = $_FILES['filegambar']['name'];

$ukuran_gambar = $_FILES['filegambar']['size'];

if ($ukuran_gambar > 1000000000000000) {
    echo 'Ukuran gambar melebihi 80kb';
} else {
    if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
        echo 'Simpan data berhasil';
        // Check for error in query
        header("location:simulasi.php?page=lihat&mode=solidity&address=" . $nama_gambar);
    } else {
        echo 'Gagal';
    }
}
