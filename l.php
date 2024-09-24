<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ims";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
//getting the post values
$username=$_GET['username'];
$password=$_GET['password'];
$sql="select * from 'user' where username='$username' AND password='$password'";
$result =$conn->query($sql)

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    echo"<h1>Login Succesful</h1>";
    echo"<h1>Employee details</h1>";
    echo"<p><strong>ID:</strong>".$row["id"].</p>;
    echo"<p><strong>username:</strong>".$row["username"].</p>;
    echo"<p><strong>password:</strong>".$row["password"].</p>;
    echo"<p><strong>status:</strong>".$row["status"].</p>;
    echo"<p><strong>email:</strong>".$row["email"].</p>;
 }

 $conn->close();
 ?>
