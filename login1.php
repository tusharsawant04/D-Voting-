<?php
session_start();
include("connect.php");
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$role=$_POST['role1'];
$result = mysqli_query($connect,"SELECT * FROM user WHERE adhar='$mobile' AND password='$password' AND 	role='$role'");

if(mysqli_num_rows($result)>0)
{
   $userdata=mysqli_fetch_array($result);
   $groups=mysqli_query($connect,"SELECT * FROM groups");
   $groups_data=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['userdata']=$userdata;
    $_SESSION['groupsdata']=$groups_data;
    echo '<script>window.location.href = "dashboard.php";</script>';
}
else{
    echo '<script>alert("Invalid Credianals.|")</script>';  
    echo '<script>window.location.href = "login.php";</script>';
}


    
?>