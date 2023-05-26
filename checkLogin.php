<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan email dan password yang sesuai
$data = mysqli_query($conn,"select * from users where email='$email' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	if($email=="lembaga@gmail.com"){
		header("location:lembaga/formanalisislihat.php?page=lihat");
	}else if($email=="publik@gmail.com"){
		header("location:lembaga/formanalisislihatpublik.php?page=lihat");
	}else{
		header("location:formanalisislihat.php?page=bone");
	}
}else{
	header("location:index.php?pesan ".$password);
}
?>