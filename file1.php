<?php
include('config.php');
 $name=$_POST["stu_name"];
 $standard=$_POST["stu_standard"];
 $gender=$_POST["stu_gender"];
 $phone=$_POST["stu_phone"];
 $city=$_POST["stu_location"];
 $email=$_POST["stu_email"];
 $compass=$_POST["stu_compass"];
 $pass=$_POST["stu_pass"];
 $dob=$_POST["stu_dob"];
 $sql="INSERT INTO `student_details`(`name`, `dob`, `gender`, `class`, `phone`, `city`, `email`, `password`) VALUES('$name','$dob','$gender',$standard, '$phone','$city','$email','$pass');";
 if($pass==$compass)
 {
 	if(mysqli_query($con, $sql))
	{
		echo '<script type="text/javascript">window.alert("Registered Successfully")</script>';
		echo '<script>window.location.href="1st_page.html";</script>';
		
	}
	else
	{
		echo '<script type="text/javascript">window.alert("ERROR: Could not able to execute $sql. " . mysqli_error($con);)</script>';
		echo '<script>window.location.href="1st_page.html";</script>';
	}

 }
 else
 {
 	echo '<script type="text/javascript">window.alert("password does not match")</script>';
 	echo '<script>window.location.href="1st_page.html";</script>';
 }
 ?>