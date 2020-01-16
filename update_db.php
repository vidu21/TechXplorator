<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $name=$_POST["name"];
            $mob=$_POST["phone"];
            $gen=$_POST["gend"];
            $dep=$_POST["dep"];
            $emp=$_POST["emp"];
            $int=$_POST["in_time"];
            $out=$_POST["out_time"];
            $date=$_POST["date"];
            if(isset($_POST['submit'])){
                $sql="UPDATE enquiry set name='".$name."',Contact= '".$mob."',gender='".$gen."',
	 department='".$dep."',emp_name='".$emp."',in_time='".$int."',out_time='".$out."',date='".$date."' where contact='$mob' ";
	if(mysqli_query($conn,$sql))
	{
		$msg="Record updated successfully";
        echo $msg;
	}
            }

?>