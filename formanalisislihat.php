<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionLihat.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Form Melihat Review</h5>
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart Contract Address</label>
                        <p class="text-danger">* Contoh: 0x9C818e93C0884f75f48d93a9BDB2E994f8d77b86</p>
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary" onclick="progressLoad()" type="submit" name="submit" value="Periksa Smart Contract">
                    </div>
                </div>
            </form>
            <br>
            <?php
            if ($GET['on'] = NULL) {
            ?>
                <div class="h-100 bg-light rounded p-4">
                    <h5>Hasil Review</h5>
                    <hr>
                    <br>
                    <p><b>Memuaskan : </b></p>
                    <p><b>Meragukan/Berbahaya : </b></p>
                    <div style="margin-top: 20px;">
                        <a class="btn btn-success" href="detail.php?data=<?php echo '0x9C818e93C0884f75f48d93a9BDB2E994f8d77b86'?>" role="button">More Detail</a>
                    </div>
                </div>
            <?php
            };
            ?>

        </div>

    </div>
</div>
<!-- Widgets End -->

<?php
include("footer.php");

if ($_GET['status'] == 'sukses') {

    if($_GET['0'] == NULL){
        $data = $_GET['data'];
        // $data = substr($data, 2);
        // console_log($data);
        echo '<script> successProgress_lihat('.$_GET['1'].',0,'.'"'.$data.'"'.')</script>';
    }elseif($_GET['1'] == NULL){
        echo '<script> successProgress_lihat(0,'.$_GET['0'].','.'"'.$data.'"'.')</script>';
    }else{
        echo '<script> successProgress_lihat('.$_GET['1'].','.$_GET['0'].','.'"'.$data.'"'.')</script>';
    }
   
} elseif ($_GET['status'] == 'gagal') {
    echo  '<script> failedProgress_lihat() </script>';
}
?>