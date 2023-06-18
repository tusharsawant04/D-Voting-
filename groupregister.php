<?php
include("connect.php");
$name=$_POST['username'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];

    move_uploaded_file($tmp_name, "data/$image");
    $insert=mysqli_query($connect,"INSERT INTO groups (name, photo)
VALUES ('$name','$image')
;");
if($insert){
    echo '<script>alert("Party Added Successfully |")</script>';
    echo '<script>window.location.href = "group.php";</script>';;
}

?>
