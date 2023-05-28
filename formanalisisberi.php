<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionReview.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Form Memberikan Review</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart contract address</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <label class="form-label"><b>Upload Hasil Simulasi </b>(scenario.json)</label>
                        <p class="text-danger">* File rekaman simulasi yang  telah anda lakukan sebagai bukti bahwa anda telah melakukan simulasi.</p>
                        <input class="form-control form-control-lg" id="formFileLg" name="image" type="file" accept=".json" >
                    </div><br>
                    <div class="form-floating mb-3">
                        <select class="form-select" name="kondisi" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Select</option>
                            <option value="1">Terpercaya</option>
                            <option value="0">Meragukan/Berbahaya</option>
                        </select>
                        <label for="floatingSelect">Pilih Review Smart Contract</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="catatan" placeholder="Catatan Pasien" id="floatingTextarea" style="height: 150px;"></textarea>
                        <label for="floatingTextarea">Komentar</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary"  onclick="progressLoad()"  type="submit" name="submit" value="Berikan Review">
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
<!-- Widgets End -->

<?php
include("footer.php");

if ($_GET['status'] == 'sukses') {
    echo '<script> successProgress() </script>';
} elseif ($_GET['status'] == 'failed') {
    echo  '<script> failedProgress() </script>';
}


?>