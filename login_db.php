<?php


session_start();


$email=$_POST['email'];
$password1=$_POST['password'];
$role=$_POST['role'];
$message="Please fill the Correct Details";
$c=0;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$s="select * from login";
$rs=$conn->query($s);

if ($rs->num_rows > 0) {
    // output data of each row
    while($row = $rs->fetch_assoc()) {
       if(($email==$row["email"]) && ($password1== $row["password"]) &&($role)==$row["role"])
{
$c=$c+1;
$_SESSION['email']= $email;
$_SESSION['password']= $password1;
if ($role=="admin"){
    header("Location: admin.php");
}else{
header("Location: entryform.php");
}
}

}}
if($c==0){
    header( "refresh:0;index.php" );
  
    
    echo "<script type='text/javascript'>alert('$message');</script>";
  
}
 
?>

