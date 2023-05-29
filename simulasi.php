<?php
include("header.php");
include("config.php");
$imagedata = file_get_contents("solidity/".$_GET['address']);
$base64 = base64_encode($imagedata);
?>

<style>
   iframe {
      display: block;
      width: 100%;
      height: 600px;
   }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div id="settings" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3 class="modal-title">Simulasi Smart Contract</h3>
         </div>
         <div class="modal-body">
            <h5> <b>Langkah - Langkah:</b> </h5>
            1.Klik <img src="img/compile.png" alt="Compile" width="113" height="42" /> <br> <br>
            2.Klik <img src="img/depnrun.png" alt="Deploy and Run Transaction" width="37" height="45" /> <br> <br>
            3.Klik <img src="img/deploy.png" alt="Deploy" width="87" height="39" /> <br> <br>
            4.Klik <img src="img/depcon.png" alt="Deployed Contract" width="203" height="57" /> <br> <br>
            5.Silahkan jalankan simulasi sambil memcocokkan dengan Brosur. <br> <br>
            6.Klik <img src="img/record.png" alt="Simpan Transaksi" width="252" height="48" /> <br>

         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>

<div class="container-fluid pt-4 px-4">
   <Button type="button" data-toggle="modal" data-target="#settings" class="btn btn-danger">Tata Cara Penggunaan</Button>
   <br><br>
   <?php if ($_GET['mode'] == 'text') { ?>
      <iframe id="dip" src="http://localhost:8080/#address=<?php echo $_GET['address'] ?>" name="thumbnails" frameborder="0">
      <?php } else { ?>
         <iframe id="dip" src="http://127.0.0.1:8080/?#code=<?php echo $base64 ?>" name="thumbnails" frameborder="0">

         <?php } ?>
</div>

<?php
include("footer.php");
?>