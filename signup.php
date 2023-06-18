<html>
  <head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type = "module" src="signup.js"></script>
  </head>
  <body data-title="signupForm">
  <?php include 'connect.php'; ?>
    <div class="center">
      <h1>Signup Form</h1>
      <form action="register.php" method="POST" id="signup" enctype="multipart/form-data">
       <p>Please fill in this form to create an account.</p>
     <div class="txt_field">
          <input type="text" name="username" id = "nameReg" required>
          <span></span>
          <label>Name</label>
        </div>

        <div class="txt_field">
          <input type="text" name="email" id = "emailReg" required>
          <span></span>
          <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="text" name="mobile" id = "mobileReg" required>
          <span></span>
          <label>Mobile No.</label>
        </div>

        <div class="txt_field">
          <input type="text" name="addhar" id = "aadharReg" required>
          <span></span>
          <label>Addhar No</label>
        </div>

        <div class="txt_field">
          <input type="password" name="pass" id = "passwordReg" required>
          <span></span>
          <label>Password</label>
        </div>

        <div class="txt_field">
          <input type="password" name="cpass" id = "confpassReg" required>
          <span></span>
          <label>Confirm Password</label>
        </div><div class="pho">
Upload Profile:<input type="file" name="my_image"></div>
<br>

        <select class="form-select"  name="role" aria-label="Default select example">
          
          <option value="1">Voter</option>
         
        </select><br>
        <br><br><br>
        <input type="submit" class="signupbtn" name="submit"/>       
        <p class="text-secondary">Already have an account  <a href="login.php"> SignIn</a></p>
   
      </form>
    </div>
  </body>
</html>
