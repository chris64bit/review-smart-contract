<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionSimul.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Simulasi Smart Contract</h5>
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart Contract Address</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary" onclick="progressLoad()" type="submit" name="submit" value="Jalankan Simulasi dengan Alamat Smart Contract">
                    </div>
                    <div style="margin-top: 20px;">
                        <label class="form-label"><b>Upload File Smart Contract: </b>(.sol)</label>
                        <input class="form-control form-control-lg" id="formFileLg" name="image" type="file" onchange="onFileSelected(event)">
                    </div>
                    <div id="preview" hidden="hidden">
                        <label class="form-label" style="margin-top: 10px;"><b>Preview Brosur</b></label> <br>
                        <img id="myimage" height="200">
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary" type="submit" name="submit" value="Jalankan Simulasi dengan File Solidity">
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
                        <a class="btn btn-success" href="detail.php" role="button">More Detail</a>
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
        echo '<script> successProgress_lihat('.$_GET['1'].',0,'.$_GET['data'].')</script>';
    }elseif($_GET['1'] == NULL){
        echo '<script> successProgress_lihat(0,'.$_GET['0'].','.$_GET['data'].')</script>';
    }else{
        echo '<script> successProgress_lihat('.$_GET['1'].','.$_GET['0'].','.$_GET['data'].')</script>';
    }
   
} elseif ($_GET['status'] == 'gagal') {
    echo  '<script> failedProgress_lihat() </script>';
}
?>