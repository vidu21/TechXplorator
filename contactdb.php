<?php
$cont = $_POST['phone'];
$c=0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abes";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
            $s="select contact from enquiry";
            $rs=$conn->query($s);
            
            if ($rs->num_rows > 0) {
                // output data of each row
                while($row = $rs->fetch_assoc()) {
                   if($cont==$row["contact"])
            {
                $c=$c+1;
include_once('Update.php');

            }
            
         }
         
        }
        if($c==0)
    {
        header('location: Guest.php');
    }
    

    
   ?>     