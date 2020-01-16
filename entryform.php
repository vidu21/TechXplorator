<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
<style>
.photo{
    width: 100%; 
		padding: 12px 10px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
    height: 480px;
}
    </style>
</head>
<body>

<video id="video" class="photo"autoplay=""></video>
<button id="snap">Snap Photo</button>

<button id="close" >Close camera</button>
<canvas id="canvas" class="photo"></canvas>
<button id="upload">Uplaod</button>
<script>

var video = document.getElementById('video');
var localStream;
// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
		localStream= stream;
        video.play();
    });
}
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 340, 380);
    
});

document.getElementById("close").onclick=function(){
if (video.srcObject!=null){
video.srcObject = null;
        video.pause();
		this.innerHTML="Open Camera";}

else{
video.srcObject = localStream;
    video.play();
this.innerHTML="Close Camera";
}
};
document.getElementById("upload").addEventListener("click",function(){
    var dataUrl= canvas.toDataURL();
    $.ajax({
        type:"POST",
        url:"Guest_db.php",
        data:{
            
            imgbase64: dataUrl
        }

    }).done(function(msg) {
        console.log('saved');
    });
});


</script>

</body>
</html>