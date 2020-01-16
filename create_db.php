<?php
$email = $_POST['email'];
$psw = $_POST['pname'];
$r = $_POST['role'];
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            
if($email !=''||$psw !=''){
$sql = "INSERT INTO login_db( email, password,role)VALUES ('$email','$psw','$r')";
}

            if (mysqli_query($conn, $sql)) {
               header("location: index.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
?>