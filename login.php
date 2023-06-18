<html>
  <head>
    <style>
      #logbtn{
        float:right;
      }
      </style>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type = "module" src="login.js"></script>
  </head>
  <body data-title="loginForm">
  <a href="votinghpg.html"><button type="button" id="logbtn" class="btn btn-primary">Back</button></a>
    <div class="center">

      <h1>Login</h1>
      <form action="login1.php" method="POST" id="login">
        <center><p id="msg" style="color: red;"></p></center>
        <div class="txt_field">
          <input type="text" name="mobile" id="user_mail">
          <span></span>
          <label>Adhar  No</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="pass">
          <span></span>
          <label>Password</label>
        </div>

 <select class="select" name="role1">

    
    <option value="1">Voter</option>
    
  </select>
<br><br>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="signup.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>
