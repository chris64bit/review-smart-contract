<?php
include("config.php");

$nama = $_POST['nama'];

$data = mysqli_query($conn,"select * from tblsmartcontract where nocontract='$nama'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    header("location:formanalisislihat.php?page=lihat&data=".$nama."&status=sukses");
}else{
    header("location:formanalisislihat.php?page=lihat&status=gagal");
}