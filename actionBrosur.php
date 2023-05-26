<?php
include("config.php");

$image_upload_val = array(
    'image' => new CurlFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name']),
);
$nama = $_POST['nama'];
$catatan = $_POST['hash'];
$kondisi = $_POST['flag'];


$data = mysqli_query($conn,"select * from tblsmartcontract where nocontract='$nama' and hash='$catatan' and flag='$kondisi'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
// echo $cek['']
if($cek > 0){
	header("location:formanalisisbrosur.php?status=sukses&page=brosur");
}else{
	header("location:formanalisisbrosur.php?status=gagal&page=brosur");
}
