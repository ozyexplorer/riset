<?php
session_start();
$user = "fata97";
$password = "bismillah";
if ( isset($_POST['submit'])) {
  if ($_POST['username'] == $user &&
      $_POST['password'] == $password ) {
      $_SESSION['username'] = $_POST['username'];
      header('Location: index.php');
  }else{
    echo "Login Gagal";
  }
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
  <form class="login" action="" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Login">
  </form>

  </body>
</html>
