<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionBrosur.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Cek Brosur untuk Public</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nama" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart Contract Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="hash" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Hash Transaksi</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="flag" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Flag Hash</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <label class="form-label"><b>Upload File Brosur </b>(.pdf)</label>
                        <input class="form-control form-control-lg" id="formFileLg" name="image" type="file" accept="application/pdf">
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary" onclick="progressLoad()" type="submit" name="submit" value="Cek Brosur">
                    </div>
                </div>
            </form>

        </div>

    </div>
</div>
<!-- Widgets End -->

<script>

</script>


<?php
include("footer.php");

if ($_GET['status'] == 'sukses') {
    echo '<script> successProgress_brosur() </script>';
} elseif ($_GET['status'] == 'gagal') {
    echo  '<script> failedProgress_brosur() </script>';
}
?>