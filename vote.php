<?php
session_start();
 include("connect.php");
 $votes=$_POST['gvotes'];
$total_votes= $votes+1;
$gid=$_POST['gid'];
$uid=$_SESSION['userdata']['id'];
$update_votes=mysqli_query($connect,"UPDATE groups SET votes='$total_votes' WHERE id='$gid'");
$update_user_status=mysqli_query($connect,"UPDATE user SET status=1 WHERE id='$uid'");
if($update_votes and $update_user_status){
    $groups=mysqli_query($connect,"SELECT * FROM groups");
    $groupsdata=mysqli_fetch_all($groups,MYSQLI_ASSOC);
    $_SESSION['userdata']['status']=1;
    
    echo '<script>alert("Voting  Successfully.|")</script>';  
    echo '<script>window.location.href = "dashboard.php";</script>';
    
}

?>
