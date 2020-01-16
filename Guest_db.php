<?php
$name = $_POST['uname'];
$cont = $_POST['phone'];
$gen = $_POST['gender'];
$dep=$_POST['dep'];
$emp=$_POST['emp'];
$in=$_POST['int'];
$out=$_POST['out'];
$date=$_POST['date'];
$msg="Record saved successfully";
$sql="";
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
$rawData= $_POST['imgbase64'];
$filteredData=explode(',',$rawData);
$unencoded= base64_decode($filteredData[1]);
$path= rand(0,9999).date('YmdHis').'.png';
$fp= fopen($path,'w');
fwrite($fp,$unencoded);
fclose($fp);
if(isset($_POST['submit'])){

$sql = "INSERT INTO enquiry( name,contact,gender,department,emp_name,in_time,out_time,date,image)VALUES ('$name','$cont','$gen','$dep','$emp','$in','$out','$date','".$path. "')";
            if (mysqli_query($conn, $sql)) {
                header("location:contactentry.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }

            $conn->close();
?>