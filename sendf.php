<?php
include('sendf_detail.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cantainer">
          <form action="sendf_detail.php" method="POST" enctype="multipart/form-data">
          <h1 class="ram">JUstSEND
        </h1>
           <div class="frm">
               <input type="text" name="name" placeholder="Your Name" >
           </div>
               <div class="frm">
                  <input type="text" name="email" placeholder="Your email or Phone">
               </div>
               <div class="frm">
                  <input type="text" name="subject" placeholder="subject">
               </div>
               <div class="frm">
                   <textarea name="message"   rows="10" placeholder="Message"></textarea>
               </div>
              <div class="btn">
                    <div class="sam">
                         <input type="file" name="image" value="picture" id="fileSelect">
                     </div>
                   <!--  <div class="fig">
                         <input type="file" name="file"value="file">
                     </div>
                     </div>-->
                     <div class="jit">
                        <input type="submit" name="submit" value="submit">
                    </div>
                    </div>
  </form> 
</div> 
</body>
</html>