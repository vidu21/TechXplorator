<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Entry Form</title>
    <style>
body{
    background-color: rgb(89, 80, 80);
} 
	form { 
		border: 1px solid black; 
		padding: 30px;
		margin: 35px;
		height: 50%;
		text-align: center;
		font-size: 33px;
	} 
	
	input{ 
		width: 100%; 
		padding: 12px 10px;
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
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
		padding: 26px; 
	} 
	
	
</style>
<body>
<div class="container"> 
    <div class="row"> 
        <div class="col-md-6 xs-12">
<form method="post"action="contactdb.php"> 
		<div class="imgcontainer"> 
			<img src= "img/abes.png" alt="Image" class="avatar"> 
		</div> 
      
            <label><b>Enter Contact Number</b></label> 
      <input type="text" placeholder="Enter contact number" name="phone" id="contact"required>
      <button type="submit" class="btn-btn success"value="Save">Submit</button>
</form>
        </div>
        </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>