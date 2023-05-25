<!DOCTYPE html>
<html>

   <head>
      <title>Simulasi Smart Contract</title>
      <?php
        $imagedata = file_get_contents("solidity/add3.sol");
        $base64 = base64_encode($imagedata);?>
   </head>
	
   <frameset framespacing="0" rows = "20%,80%">
      <frame name = "top" src = "headsim.php" />
      <frame name = "main" src = "http://localhost:8080/?#code=<?php echo $base64?>" />
   
      <noframes>
         <body>Your browser does not support frames.</body>
      </noframes>
      
   </frameset>
   
</html>
