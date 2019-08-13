<?php  
session_start();



 $db=mysqli_connect('localhost','root','','justsend');

 //connection
 if($db->connect_error){
    die("connection failed:".$db);
}
/*else{
    echo"connected";
}*/

//insert data into table
function code()
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzVBNMLKJHGFDSAQWERTYUIOP';
// Output: 54esmdr0qf
    $b= substr(str_shuffle($permitted_chars), 0, 5);
    return $b;
}


if(isset($_POST['submit']))
{   $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $code=code();
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
   # $file=$_POST['file'];
$query="INSERT INTO send(name,email,subject,message,image,code)VALUES('$name','$email','$subject','$message','$image','$code')";

mysqli_query($db,$query);
header('location:sendf.php');  

}
 ?>