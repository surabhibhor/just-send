<?php
include'code.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="cantainer">
          <form action="sendf_detail.php" method="POST">
         <h1 class="ram">CodeGenRate</h1>
         <h3> Message Code</h3>
         <div class="jit">
         <input type="text"name="code"value="<?php echo $b?>">
         <div class="sirf">
             <a href="send.php">back</a>
</div>
</body>
</html>