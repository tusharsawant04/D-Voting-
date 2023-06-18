<html>
  <head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type = "module" src="signup.js"></script>
  </head>
  <style>
    #logbtn{
      float:right;
    }
  #center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
    </style>
  <body data-title="signupForm">
  <a href="index5.html"><button type="button" id="logbtn" class="btn btn-primary">Back</button></a>
  <?php include 'connect.php'; ?>

    <div class="center">
      <h1>Add Parties</h1>
      <form action="groupregister.php" method="POST" id="signup" enctype="multipart/form-data">

     <div class="txt_field">
          <input type="text" name="username" id = "nameReg" required>
          <span></span>
          <label>Party Name</label>
        </div>

       

      

       

        

        <div class="pho">
Upload Profile:<input type="file" name="photo"></div>
<br>

        <br>
        
        <input type="submit" class="signupbtn" name="submit" value="Add"/>       
        
   
      </form>
    </div>
  </body>
</html>
