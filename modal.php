<?php
include("header.php");
include("config.php");
$imagedata = file_get_contents("solidity/add3.sol");
$base64 = base64_encode($imagedata);
?>


<button class="btn btn-default" data-toggle="modal" data-target="#settings">
            <img src="img/settings.png" alt="" class="img-circle">
        </button>
<button class="btn btn-default" data-toggle="modal" data-target="#help">
            <img src="img/help.png" alt="" class="img-circle">
        </button>
   
        

          



      
    <div id="help" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Help</h3>
                </div>
                <div class="modal-body">
                      *CONTENT TO BE MADE*
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            	</div>
        	</div>
   		 </div> 
   	</div>
<?php
include("footer.php");
?>