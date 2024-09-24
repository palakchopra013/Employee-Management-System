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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

echo"<table border ='2' style= width:70% align='center'>
<tr>
<th>ID</th>
<th>Email</th>
<th>User ID</th>
<th>Password</th>
<th>Edit</th>
</tr>";
if($result->num_rows > 0){
    while($row=$result->fetch_assoc()){
        echo="<tr>
        <td>".$row["id"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["usid"]."</td>
        <td>".$row["pass"]."</td>
        <td><a href='edit.php?id=".$row["id"]."'>Edit</a></td>
        </tr>";
    }
}else{
    echo"<tr><td colspan='4'>0 results</td></tr>";
}
echo"</table>";
$conn->close();
?>
