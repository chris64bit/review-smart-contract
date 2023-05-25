<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionValidasi.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Validator Smart Contract</h5>
                    <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart Contract Address</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary" onclick="progressLoad()" type="submit" name="submit" value="Periksa Smart Contract">
                    </div>
                </div>
            </form>
            <br>
            <?php
            if ($_GET['data'] != NULL) {
                include('getvalidasi.php');
                if (is_array($fetchData)) {
                    $sn = 1;
                    foreach ($fetchData as $data) {
                        // echo $data['nocontract'];
            ?>
                        <div class="h-100 bg-light rounded p-4">

                            <h5>Hasil Validasi</h5>
                            <hr>
                            <br>
                            <p><b>Brosur smart berdasarkan upgrade terakhir (23 Desember 2022):</b></p>
                            <p><b>Smart Contract : </b><?php echo $data['nocontract'] ?? ''; ?></p>
                            <p><b>Flag Hash : </b> <?php echo $data['flag'] ?? ''; ?></p>
                            <p><b>Hash Transaksi : </b>  <?php echo $data['hash'] ?? ''; ?></p>
                            <p><b>Brosur : </b>  <?php echo $data['brosur'] ?? ''; ?></p>
                        </div>

                <?php
                        $sn++;
                    }
                }

                ?>
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
    echo '<script> successProgress_validasi() </script>';
} elseif ($_GET['status'] == 'gagal') {
    echo  '<script> failedProgress_validasi() </script>';
}
?>