<!DOCTYPE html>
<html>

   <head>
      <title>Simulasi Smart Contract</title>
      <?php
        $imagedata = file_get_contents("solidity/add3.sol");
        $base64 = base64_encode($imagedata);?>
        <!---link simulasi dengan alamat SC http://localhost:8080/#address=0xdac17f958d2ee523a2206206994597c13d831ec7 
        link simulasi dengan upload file solidity http://localhost:8080/?#code= --->
   </head>
	
   <frameset framespacing="0" rows = "20%,80%">
      <frame name = "top" src = "headsim.php" />
      <frame name = "main" src = "http://localhost:8080/?#code=<?php echo $base64?>" />
   
      <noframes>
         <body>Your browser does not support frames.</body>
      </noframes>
      
   </frameset>
   
</html>
