<?php


session_start();

include("connect.php");

include("vote.php");

if(!isset($_SESSION['userdata'])){
  header("location:login.php");

}
$userdata=$_SESSION['userdata'];
$groupdata=$_SESSION['groupsdata'];
if($_SESSION['userdata']['status']==0){
  $status='<b style="color:red">Not Voted</b>';

}
else{
  $status='<b style="color:green"> Voted</b>';
}
?>
<html>
  <head>
    <title></title>
    <style>


      
#logbtn{
  float: right;
}
#proile{
  
  background-color: #FFFFFF;
  position:center;
  left:100px;
  width: 500px;
  height: 400px;
  padding:20px;
 
  
}
#gradient-text {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
  font-size: 50px;
}
#group
{
    
   right:100px;
   width: 500px;
   height: 800px;
  background-color: #FFFFFF;
  padding:20px;

 
 
}

#header-section{
  background-image: url(images/back.jpg);
}

body{
	background-image: url(images/plain.jpg);
}
.button{
  background-color: #4CAF50;
  padding: 2px 3px;
  text-align: center;
  cursor: pointer;
  border-radius: 12px;
  margin-top: 10px;
}
#vot{
  color:white;
  padding: 5px;
  border-radius: 5px;
  background-color :green;
  font-size: 15px;

}
#r{
  font-family: "Arial Black", Gadget, sans-serif;
  color: #FF0000;
}
#e{
  font-family: "Arial Black", Gadget, sans-serif;
  color: #007BFF;
}


      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
   
  <div id="main-section">  

<div id="header-section">
<a href="logout.php"><button type="button" id="logbtn" class="btn btn-primary">LogOut</button></a>
      <center><div id="gradient-text">ONLINE VOTING SYSTEM</div></center><hr>
</div>

    <div id="group">
    <?php
      if($_SESSION['groupsdata']){
        for($i=0;$i<count($groupdata);$i++){
          ?>
          <div>
          <img style="float:right" src="data/<?php echo $groupdata[$i]['photo']?>"  width="100" height="100"><br><br>
            <b>Group Name: </b><b id="r"><?php echo $groupdata[$i]['name']?></b><br>
            <b>Votes: </b><b id="e"><?php echo $groupdata[$i]['votes']?></b>
            <hr>
           
            <form action="vote.php" method="POST">
              <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes']?>">
              <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id']?>">
        
             
        </form>
        </div>
        <?php
        }
      }
else{

}
    ?>
      </div>
</div>
    











  </body>
</html>
