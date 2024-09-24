<?php
session_start();
    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    }
?>
<?php 

if(isset($_POST['submit'])){
    //print_r($_POST);  die('123');
//getting the post values
	$id=$_POST['id'];
	$username=$_POST['user-id'];
	$password=$_POST['psw'];
	$status=($_POST['status']);
	$email=($_POST['email']);
   // print_r($username); die();
	
				// $query=mysqli_query($con, "insert into user(email,username, password, status, id) 
                // values('$email','$username', '$password', $status, $id)");
				// if ($query) {
				// 	echo "<script>alert('You have successfully inserted the data');</script>";
				// 	echo "<script type='text/javascript'> document.location ='index.php'; </script>";
				// } else {
				// 	echo "<script>alert('Something Went Wrong. Please try again');</script>";
				// }


              
        $conn = mysqli_connect("localhost", "root", "", "ims");
        $message = $_POST['message'];

        $sql = "INSERT INTO user (id,email, username,password,status) VALUES ($id, '$email', '$username',' $password',status)";
        $insert = mysqli_query($conn, $sql);
        mysqli_close($conn);
        if ($insert) {
            echo "Message successfully added!";
        } else {
            echo "Error" . mysqli_error($conn);
        }
    
}
?>

?>
