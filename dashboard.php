<?php


session_start();
include("connect.php");
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

#logbtn2{
float:left;
margin-left: 1500px;
}
      
#logbtn{
  float: right;
   
}

#proile{
  
  background-color: #FFFFFF;
  position:absolute;
  left:10px;
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
  position:absolute;
   right:10px;
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
#r{
  font-family: "Arial Black", Gadget, sans-serif;
  color: #FF0000;
}
#vot{
  color:white;
  padding: 5px;
  border-radius: 5px;
  background-color :green;
  font-size: 15px;

}


      </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
   
  <div id="main-section">  

<div id="header-section">
<a href="dashboard2.php"><button type="button" id="logbtn2" class="btn btn-primary">Result</button></a>&nbsp;
  <a href="logout.php"><button type="button" id="logbtn" class="btn btn-primary">LogOut</button></a>
      <center><div id="gradient-text">ONLINE VOTING SYSTEM</div></center><hr>
</div>
<div id="proile">
    <center><img  src="data/<?php echo $userdata['photos']?>"  height="200" width="200"></center><br>
      <b>Name:</b> <?php echo $userdata['Name']?><br><br>
      <b>Mobile:</b><?php echo $userdata['mobile']?><br><br>
      <b>Status:</b><?php echo $status?>
    </div>
    <div id="group">
    <?php
      if($_SESSION['groupsdata']){
        for($i=0;$i<count($groupdata);$i++){
          ?>
          <div>
          <img style="float:right" src="data/<?php echo $groupdata[$i]['photo']?>"  width="100" height="100"><br><br>
            <b>Party Name: </b><b id="r"><?php echo $groupdata[$i]['name']?><br>
           
            <form action="vote.php" method="POST">
              <input type="hidden" name="gvotes" value="<?php echo $groupdata[$i]['votes']?>">
              <input type="hidden" name="gid" value="<?php echo $groupdata[$i]['id']?>"><br>
              <?php
              if($_SESSION['userdata']['status']==0){
                ?>
                
                <input type="submit" class="btn btn-secondary" value="vote">
                <?php
              }
              else{
                ?>
                <button disabled type="button" name="votebtn" value="vote" id="vot">voted</button>
                <?php
              }
              ?>
              <hr>
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
