<?php
include("config.php");

$tempdir = "download/";
$nocontract = $_POST['nocontract'];
$date = $_POST['date'];
$hash = $_POST['hash'];
$flag = $_POST['flag'];

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
        $sql = "INSERT INTO tblsmartcontract (nocontract, date, hash, flag, brosur) 
            VALUES ('$nocontract','$date','$hash','$flag', '$nama_gambar')";
        // Check for error in query
        if (!mysqli_query($conn, $sql)) {
            header("location:formanalisislihat.php?page=lihat&status=gagal");
        } else {
            mysqli_close($conn);
            header("location:formanalisislihat.php?page=lihat&status=sukses");
        }
    } else {
        echo 'Simpan data gagal';
    }
}
