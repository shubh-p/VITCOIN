<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="signup.css" />
    <script type="text/javascript">
    function jsFunction(){
    document.getElementById("d1").innerHTML = "Your passwords don't match!";
    }
    function jsFunction1(){
    document.getElementById("d2").innerHTML = "SUCCESS!";
    }
</script>
  </head>

  <body>
    <div class="center">
      <div class="under-plate"></div>
      <div class="main-container">
        <div class="none">
          <img class="logoimg" src="images/translogo.png" alt="logo" />
        </div>
        <div class="none">
          <h2 class="title"><span>Create Account</span></h2>
        </div>
        <div class="loginform">
          <div class="img-prof-container">
            <img class="profile" src="images/favicon.png" alt="profile" />
          </div>
          <div class="fild">
            <form action="signup.php" method="post">
            <div class="input-name">
              <label>your name</label>
              <input type="text" name="nam" placeholder="Enter your name..." />
            </div>
            <div class="input-email">
              <label>your email</label>
              <input type="email" name="mail" required placeholder="Enter your @email..." />
            </div>
            <div class="input-password">
              <label>your password</label>
              <input type="password" name="psw" required placeholder="Enter your password..." />
            </div>
            <div class="input-password-confirm">
              <label>confirm your password</label>
              <input type="password" name="cpsw" required placeholder="Confirm your password..." />
              <p id="d2" style="color: green;"></p>         
              <p id="d1" style="color: red;"></p>
            </div>
            
            <div class="btn">
              <button type="submit" name="submit" value="SIGNUP">SIGNUP</button>
            </div>
          </form>
            <div>
            
              <p>back to<a href="index.html"> HOME</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<?php

if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['nam'];
$email = $_POST['mail'];
$psw =$_POST['psw'];
$pswc = $_POST['cpsw'];

if($psw==$pswc){

$sql = "INSERT INTO signup (name, email, password)
VALUES ('$name', '$email', '$psw')";

if ($conn->query($sql) === TRUE) {
  echo '<script type="text/javascript">jsFunction1();</script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}else{
  echo '<script type="text/javascript">jsFunction();</script>';
    
}
}
?>