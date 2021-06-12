<?php
include('Config.php');
$email=$_POST["stu_email1"];
$pass=$_POST["stu_pass1"];
$sql="SELECT * FROM `student_details` WHERE email='$email'";
$result = mysqli_query($con,$sql);
$row = $result->fetch_assoc();
$compass= $row["password"]; 
$name=$row["name"];
setcookie("stuemail",$email);
 if($pass==$compass)
 {
 	echo '<script type="text/javascript">window.alert("Login Successfully")</script>';
	echo '<script>window.location.href="student_view_page.html";</script>';
	
 }
 else
 {
 	echo '<script type="text/javascript">window.alert("password/email does not match")</script>';
 	echo '<script>window.location.href="student_Login_page.html";</script>';
 }
?>