<?php
include('Config.php');
$sql="SELECT * FROM `tutor_details`";
$result = mysqli_query($con,$sql);
$text="";
echo "<table style='font-family:Times New Roman; color:darkblue;font-size:18;margin-left:23%;' border='2'>";
echo "<tr>";
echo "<th>Name</th><th>Experince</th><th>Subject Handled</th><th>Available On</th><th>Location</th><th>Contact Number</th><th>Email</th></tr>";
if ($result->num_rows> 0)
{
// output data of each row and fetches a result row as an associative array
while($row = $result->fetch_assoc()){
echo "<tr>";
echo "<td>". $row["name"]."</td>";
echo "<td>". $row["experience"]."</td>";
echo "<td>". $row["subject"]."</td>";
echo "<td>". $row["available"]."</td>";
echo "<td>". $row["city"]."</td>";
echo "<td>". $row["phone"]."</td>";
echo "<td>".$row["email"]."</td></tr>";
}
}

?>
<html>
    <head>
        <title>Tutormeet-Search-tutor</title>
        <style>
             h1
           {
              color: deepskyblue;
              font-family: "Times New Roman", Times, serif;
              font-style: normal;
               font-size:6vw
           }
                         .sidebar {
              margin: 0;
              padding: 0;
              width: 200px;
              background-color:blue;
              position: fixed;
              height: 100%;
              overflow: auto;
            }

            /* Sidebar links */
            .sidebar a {
              display: block;
              color: white;
              padding: 16px;
              text-decoration: none;
              font-family: "Times New Roman", Times, serif;
            }

            /* Active/current link */
            .sidebar a.active {
              background-color:blue;
              color: white;
            }

            /* Links on mouse-over */
            .sidebar a:hover:not(.active) {
              background-color:blue;
              color: white;
            }

            /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
            div.content {
              margin-left: 200px;
              padding: 1px 16px;
              height: 1000px;
            }

            /* On screens that are less than 700px wide, make the sidebar into a topbar */
            @media screen and (max-width: 700px) {
              .sidebar {
                width: 100%;
                height: auto;
                position: relative;
              }
              .sidebar a {float: left;}
              div.content {margin-left: 0;}
            }

            /* On screens that are less than 400px, display the bar vertically, instead of horizontally */
            @media screen and (max-width: 400px) {
              .sidebar a {
                text-align: center;
                float: none;
              }
            }
        </style>
    </head>
    <body>
            <header><h1 align="center">Tutormeet-Search Tutor</h1></header>
            <p style="font-family:Times New Roman; color:darkblue;font-size:24;margin-left:23%;">Here are the tutor you are searching for, make a call or email them and fix an appiontment</p>
        <div class="sidebar" style="background-color: dodgerblue">
                    <a href="student_view_page.html">Home</a>
                    <a class="active" href="Search_tutor.php">Search Tutor</a>
                    <a href="update_profile.php">Update Profile</a>
                    <a href="student_Login_page.html">Logout</a>
        </div>

    </body>
</html> 