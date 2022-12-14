<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
  <link rel="icon" href="images/logo.png" type="image/png">
</head>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" name="password" placeholder="Enter Password" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="isRememberMe" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name='submit' class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

<?php
  if(isset($_POST['submit']))
  {
    echo 'Your account was created!<br>';
    echo 'Email: '. $_POST['email']. '<br>';
    echo 'Password: '. $_POST['password'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'hotel';
    $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

    $email = $_POST['email'];
    $password = $_POST['password'];
    $isRememberMe = $_POST['isRememberMe'];
    $sql = "INSERT INTO user (`email`, `password`, `isRememberMe`) " 
              . "VALUES ('$email','$password','$isRememberMe')";

    // Add user to the database
    $result = $mysqli->query($sql);
  }
?>