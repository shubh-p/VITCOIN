<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="signup.css" />
    <script type="text/javascript">
    function jsFunction(){
    document.getElementById("d1").innerHTML = "Invalid credentials entered !";
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
          <h2 class="title"><span>Welcome Back</span></h2>
        </div>
        <div class="loginform">
          <div class="img-prof-container">
            <img class="profile" src="images/favicon.png" alt="profile" />
          </div>
          <form action="" method="post">
          <div class="fild">
            <div class="input-email">
              <label>your email</label>
              <input type="email" name="mail" required placeholder="Enter your @email..." />
            </div>
            <div class="input-password">
              <label>your password</label>
              <input type="password" name="psw" required placeholder="Enter your password..." />
              <p id="d2" style="color: green;"></p>         
              <p id="d1" style="color: red;"></p>
            </div>
            <div class="btn">
              <button type="submit" id="submit" name="submit" value="LOGIN">LOGIN</button>
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
$mail = $_POST['mail'];
$psw = $_POST['psw'];


$sql = "SELECT name FROM signup WHERE email='$mail' AND password='$psw'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo '<script type="text/javascript">jsFunction1();</script>';
      echo "&nbsp&nbspWelcome back ". $row['name']." :)";
    }
  } else {
    echo '<script type="text/javascript">jsFunction();</script>';
  }
$conn->close();
}
?>