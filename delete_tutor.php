<?php
include('Config.php');
$email=$_POST["email"];
$sql1="SELECT email FROM `tutor_details";
$sql="DELETE FROM `tutor_details` WHERE email='$email'";
$res=mysqli_query($con,$sql1);
if ($res->num_rows> 0)
{
	while ( $row = $res->fetch_assoc())
	{
			# code...
		if($row["email"]==$email)
		{
			if(mysqli_query($con,$sql))
			{
				echo '<script type="text/javascript">window.alert("Deleted Successfully")</script>';
				echo '<script>window.location.href="view_admin_tutor.php";</script>';
			}
			else
			{
				echo '<script type="text/javascript">window.alert("Email not found")</script>';
				echo '<script>window.location.href="view_admin_tutor.php";</script>';
			}
		}
		else
		{
			echo $email;
			echo '<script type="text/javascript">window.alert("Email not found")</script>';
			echo '<script>window.location.href="view_admin_tutor.php";</script>';
			
		}
	}
}
else
		{
			echo $email;
			echo '<script type="text/javascript">window.alert("Email not found")</script>';
			echo '<script>window.location.href="view_admin_tutor.php";</script>';
			
		}
?>