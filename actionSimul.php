<?php
include("config.php");

$nama = $_POST['nama'];

$data = mysqli_query($conn,"select hasil,COUNT(*) AS total from tblreview where nocontract='$nama' GROUP BY hasil");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    $row1 = mysqli_fetch_assoc($data);
    echo $row1['total']; // mengakses nilai kolom1 dari baris pertama
    
    // Mengambil data kedua
    $row2 = mysqli_fetch_assoc($data);
    echo $row2['total']; // mengakses nilai kolom1 dari baris kedua

    header("location:formanalisislihat.php?page=lihat&data=".$nama."&".$row1['hasil']."=".$row1['total']."&".$row2['hasil']."=". $row2['total']."&status=sukses");
}else{
    header("location:formanalisislihat.php?page=lihat&status=gagal");
}