<?php
include('Config.php');
$name=$_POST["name"];
 $standard=$_POST["standard"];
 $gender=$_POST["gender"];
 $phone=$_POST["phone"];
 $city=$_POST["location"];
 $email=$_POST["email"];
 $compass=$_POST["password1"];
 $pass=$_POST["password"];
 $dob=$_POST["dob"];
 $useremail=$_COOKIE["stuemail"];
 setcookie("stuemail",$email);

 $sql="DELETE FROM `student_details` WHERE email='$useremail'";
 if(mysqli_query($con, $sql))
	{
		$sql1="INSERT INTO `student_details`(`name`, `dob`, `gender`, `class`, `phone`, `city`, `email`, `password`) VALUES('$name','$dob','$gender',$standard, '$phone','$city','$email','$pass');";
		 if($pass==$compass)
		 {
		 	if(mysqli_query($con, $sql1))
			{
				echo '<script type="text/javascript">window.alert("updated Successfully")</script>';
				echo '<script>window.location.href="student_view_page.html";</script>';
				
			}
			else
			{
				echo '<script type="text/javascript">window.alert("here")</script>';
				echo 'ERROR: Could not able to execute $sql.' . mysqli_error($con);
				//echo '<script>window.location.href="update_profile.php";</script>';
			}

		 }
		 else
		 {
		 	echo '<script type="text/javascript">window.alert("password does not match")</script>';
		 	echo '<script>window.location.href="update_profile.php";</script>';
		 }
				
	}
	else
	{
		echo '<script type="text/javascript">window.alert("Could not update")</script>';
		 	echo '<script>window.location.href="update_profile.php";</script>';
	}

?>