<?php
include("connect.php");
$name=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$addhar=$_POST['addhar'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$role=$_POST['role'];
$image=$_FILES['my_image']['name'];
$tmp_name=$_FILES['my_image']['tmp_name'];

if($pass==$cpass){
    move_uploaded_file($tmp_name, "data/$image");
    $result = mysqli_query($connect,"SELECT * FROM user WHERE adhar='$addhar'");

if(mysqli_num_rows($result)>0)
{
    echo '<script>alert("Enter Correct Adhar No.|")</script>';  
    echo '<script>window.location.href = "signup.php";</script>'; 

}
  else{

$insert=mysqli_query($connect,"INSERT INTO user (Name, Email, mobile, password, role,status,votes,adhar,photos)
VALUES ('$name', '$email', '$mobile', '$pass', '$role',0,0,'$addhar','$image')
;");
}

if($insert){
    echo '<script>alert("Successfully Register|")</script>';
    echo '<script>window.location.href = "login.php";</script>';;
}
}

else{
    echo '<script>alert("Passsword  Not Match")</script>';
    echo '<script>window.location.href = "login.php";</script>';
}

?>
