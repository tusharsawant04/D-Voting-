<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type = "module" src="login.js"></script>
  </head>
  <style>
    #logbtn2{
      float:right;
    }
    </style>
  <body data-title="loginForm">
  <a href="votinghpg.html"><button type="button" id="logbtn2" class="btn btn-primary">Back</button></a>&nbsp;
    <div class="center">
      <h1>Login</h1>
      <form action="adminlo.php" method="POST" id="login">
        <center><p id="msg" style="color: red;"></p></center>
        <div class="txt_field">
          <input type="text" name="id1" id="user_mail">
          <span></span>
          <label>Admin ID</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password1" id="pass">
          <span></span>
          <label>Password</label>
        </div>


<br><br>
        <input type="submit" value="Login">
      </form>
    </div>

  </body>
</html>
