<!DOCTYPE html> 
<html> 
    <title>Guest Entry Form</title>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
<style> 
	form { 
		border: 1px solid #f1f1f1; 
	} 
	
	input, select{ 
		width: 100%; 
		padding: 12px 10px;
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
	} 
	section{
		margin-left: 40%;
		margin-right: 40%;
	}
	button { 
		background-color: royalblue; 
		color: white; 
        padding: 12px 10px; 
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 100%; 
	} 
	
	button:hover { 
		opacity: 0.8; 
	} 
	
	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
	} 
	
	img.avatar { 
		width: 30%; 
		border-radius: 20%;
        height: 40%; 
	} 
	
	.container { 
		padding: 16px; 
	} 
	
	
		.btn { 
			width: 70px;
            float: left; 
		}  
</style> 
</head>
<body> 
	<div class="container">
		<div class="row">
			<section>
			<h2 style="color:red;">ENTRY FORM</h2>
			</section>
		</div>
	</div>
    
    <div class="container"> 
    <div class="row"> 
        <div class="col-md-6 xs-12">
	<form name="myform" method="post"action="Guest_db.php" onsubmit="return validateForm()"> 
		<div class="imgcontainer"> 
			<img src= "img/abes.png" alt="Image" class="avatar"> 
		</div> 

		
			<label><b>Name</b></label> 
			<input type="text" placeholder="Enter Name" name="uname" id="name" required> 
            <label><b>Contact</b></label> 
			<input type="text" placeholder="Enter contact number" name="phone" id="contact"required> 
			
		<label for="radio"><b>Gender</b></label>	
		<input type="radio" name="gender" id="gender" value="Male" > Male
		  <input type="radio" name="gender" id="gender" value="Female" > Female<br>
	 
		  <?php
		  $servername = "localhost";
		  $username = "root";
		  $password = "";
		  $dbname = "abes";
		  $conn = new mysqli($servername, $username, $password, $dbname);
		  if ($conn->connect_error) {
						 die("Connection failed: " . $conn->connect_error);
					  }
					  $s="SELECT * from department";
					  $rs=$conn->query($s);
					 
			?>
			<label><b>Select Department</b></label> 
			<select name="dep" id="dep" >
				<?php 
				 while($rows=$rs->fetch_assoc())
				 {
					 echo"<option value=".$rows['dep_name'].">".$rows['dep_name']."</option>";
				 } 
				?>
            </select>
			<label><b>Select Faculty Name</b></label> 
			<select name="emp" id="emp"> 
			<option value="AS">Anand Srivastava</option>
				<option value="RM">Rashmi Mishra</option>
			</select>
			<label><b>In-Time</b></label>
			<input type="time" name="int"  > 
			<label><b>Out-Time</b></label>
			<input type="time" name="out"  > 
			<label><b>Date</b></label>
            <input type="date" name="date"  > 
			<button type="submit" name="submit" value="Save">Submit</button> 
		 
			<button type="buton" class="btn btn-danger">Cancel</button> 
    </form> 
        </div>
            <div class="col-md-6 xs-12">
                <?php
                include("entryform.php");
                ?>
            </div>
        </div>
	</div>
	<script>
function validateForm(){
var name=document.myform.name.value;
var phone=document.myform.phone.value;
if(name==null||phone==""|| phone.length<10){
	alert("The fields cannot be blank");
	return false;
}

}
		</script>
	
</body> 

</html> 
