<?php
include("header.php");
include("config.php");
?>

<!-- Widgets Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-md-12 col-xl-12">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Simulasi Smart Contract</h5>
                    <div class="form-floating mb-3">
                        <input type="text" name="namaaddress" class="form-control" id="myText" placeholder="Faizurrahman Allam">
                        <label for="floatingInput">Smart Contract Address</label>
                    </div>
                    <div style="margin-top: 20px;">
                        <button onclick="tosimulasi()" class="btn btn-warning" type="submit" name="submit">Jalankan Simulasi dengan Alamat Smart Contract</button>
                    </div>
                </div>
        </div>
        <br>
        <div class="col-sm-12 col-md-12 col-xl-12">
            <form action="actionSimul.php" method="POST" enctype="multipart/form-data">
                <div class="h-100 bg-light rounded p-4">
                    <h5 class="mb-4">Simulasi Smart Contract</h5>
                    <div style="margin-top: 20px;">
                        <label class="form-label"><b>Upload File Smart Contract: </b>(.sol)</label>
                        <input class="form-control form-control-lg" id="formFileLg" name="filegambar" type="file" accept=".sol">
                    </div>
                    <div style="margin-top: 20px;">
                        <input class="btn btn-primary" type="submit" name="submit" value="Jalankan Simulasi dengan File Solidity">
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- Widgets End -->

<?php
include("footer.php");
?>

<script>
    function tosimulasi() {
        var x = document.getElementById("myText").value;
        console.log(x);
        window.location.href = `simulasi.php?page=simulasi&mode=text&address=${x}`;
    }
</script>