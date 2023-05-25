<?php
include("config.php");

$image_upload_val = array(
    'image' => new CurlFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name']),
);
$nama = $_POST['nama'];
$catatan = $_POST['catatan'];
$kondisi = $_POST['kondisi'];

$sql = "INSERT INTO tblreview (nocontract, hasil, komentar) 
            VALUES ('$nama','$kondisi','$catatan')";
// Check for error in query
if (!mysqli_query($conn, $sql)) {
    console_log(mysqli_error($conn));
    header("location:formanalisisberi.php?page=bone&status=gagal");
}else{
    mysqli_close($conn);
    header("location:formanalisisberi.php?page=bone&status=sukses");
}
