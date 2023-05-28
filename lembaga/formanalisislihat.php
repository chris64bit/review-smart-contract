<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionvalid.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Input Validasi Smart Contract</h5>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nocontract" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart contract address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="date" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Tanggal Upgrade</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="flag" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Flag Hash</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="hash" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Hash Transaksi</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <label class="form-label"><b>Upload Brosur </b>(.pdf)</label>
                        <input type="file" class="form-control form-control-lg"  name="filegambar" id="formFileLg" accept=".pdf" >
                    </div><br>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary"  onclick="progressLoad()"  type="submit" name="submit" value="Simpan">
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
} elseif ($_GET['status'] == 'gagal') {
    echo  '<script> failedProgress() </script>';
}


?>