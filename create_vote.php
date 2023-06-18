<html>
  <head>
    <?php include 'connect.php'; ?>
    <style>
    body {
      background-image: url("images/pool.jpg");
      background-repeat: no-repeat;
      background-size: 1400px 700px;
  
    }
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.select{
padding:8px 12px;

}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}

.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  cursor: pointer;
}
.pass:hover{
  text-decoration: underline;
}
input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
    </style>
    <title>Create a Poll</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script type = "module" src="login.js"></script>
    
  </head>
  <body data-title="loginForm">
    <form action="groupregister.php" method="POST" id="signup" enctype="multipart/form-data"></form>
    <div class="center">
      <center><h1>Create a Poll</h1></center>
      <form id="login">
        <center><p id="msg" style="color: red;"></p></center>
      
        <div class="txt_field">
          <input type="text" name="username" id = "nameReg" required>
          <span></span>
          <label>Poll Name</label>
        </div><br>
        <div class="pho">
          Upload Profile:<input type="file" name="photo"></div>
          <br>
        
<br />



<br><br>
        <input type="submit"  name="Add Poll"/> 
      
    </div>
  </form>
  </body>
</html>
