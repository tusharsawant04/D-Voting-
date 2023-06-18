<?php

session_start();
include("connect.php");
$id=$_POST['id1'];
$password=$_POST['password1'];
$result = mysqli_query($connect,"SELECT * FROM admin WHERE id='$id' AND password='$password' ");

if(mysqli_num_rows($result)>0)
{
    $userdata=mysqli_fetch_array($result);
    $groups=mysqli_query($connect,"SELECT * FROM groups");
    $groups_data=mysqli_fetch_all($groups,MYSQLI_ASSOC);
     $_SESSION['userdata']=$userdata;
     $_SESSION['groupsdata']=$groups_data;
        header("Location: index5.html");
}
else{
    echo '<script>alert("Invalid Credianals.|")</script>';  
    echo '<script>window.location.href = "admin.php";</script>';
}


    
?>