<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}	

// print_r($_SESSION['username'])
if(isset($_POST["logout"])){
  session_unset();
  session_destroy();
  header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
  <?php
  print_r($_SESSION);
  ?>
<form method = "POST">
<div>
            <input type="submit" name="logout" value="logout">
</div>
</form>
</body>
</html>