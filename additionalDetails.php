<?php

session_start(); 

?>
<!DOCTYPE html> 
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://kit.fontawesome.com/0e44e217c6.js" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<!--- START OF NAVBAR---> 
<nav>
        <ul>
    <li><a href="https://dcwater.com/" id="image"><img src="Images/dcWaterLogo.png"></a></li>
    <li><a href="#"><img src="Images/searchIcon.png"></a></li>
    <li><a href="#"><img src="Images/menuIcon.png"></a></li>
        </ul>

</nav>
<!--- END OF NAVBAR ---> 
<div>
<p id="ReportAnEmergency">Report a Problem</p>
</div>


<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Problem Details</p>
</div>

<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 



<hr align="left">

<div style="margin-top: 20px;" >
    <span class = "bold">Add A Photo</span>
</div>
<div style="margin-top: 20px;">
<form action="upload.php" method="post" enctype="multipart/form-data" style="display: flex; flex-direction: row;">
 <label for="cameraInput">
 <span class="greyButton"><img src="Images/Camera.png" style="margin-right:15px; margin-left:10px;">take a Photo</span>
   <input 
        id="cameraInput"
        type="file"
        accept="image/*"
        capture="camera"
      />
</label>

<label for="uploadButton">
<span class="greyButton2"><img src="Images/upload.png" style="margin-right:15px; margin-left:10px;">Upload</span>
<input type="submit" value="Upload Image" name="submit" id="uploadButton">    
</label>
</form>
</div>
<div style="margin-right:16px;">
<div style="margin-top:20px;">

 <span class = "bold">Add A Suggested Tag</span>
</div>
<div class="container"></div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript"> 
let problemType = sessionStorage.getItem('problemType');
if (problemType.toString()=="Damage") {
    $(".container").load("damages.php");
}
if (problemType.toString()=="OutFlood") {
 $(".container").load("outFlood.php");
} 
if (problemType.toString()=="InFlood") {
     $(".container").load("inFlood.php");

} 
if (problemType.toString()=="Pressure") {
     $(".container").load("pressure.php");
}
if (problemType.toString()=="NoWater") {
     $(".container").load("NoWater.php");
} 
if (problemType.toString()=="Quality") {
     $(".container").load("waterQuality.php");
}   

</script>
</div>

<div>
     <span class = "bold">Desription<span style="color:red;">*</span></span>
</div>

<div style="margin-top:20px; margin-left: 16px; margin-bottom: 100px;">
    <form name="textForm" method="post">
     <textarea class="descriptionBox" id="description" placeholder="Enter Text Here...." onchange="writeText()"></textarea>
    </form>
</div>
<script type="text/javascript">
function writeText(){
    var description = document.forms["textForm"]["description"].value;
    sessionStorage.setItem('descriptionOfProblem',description);
    alert(description);
}
</script>



<div class="bottomNav">

<button onclick="#" type="button" id = "prevButton"  class="prevButton"><span class="prevButtonText"><img src="Images/PrevArrow.png" class ="prevArrow">Back</span></button>
<button onclick="location.href='contactInformation.php' " type="button" id="nextButton" class="nextButton"><span class="nextButtonText">Next<img src="Images/nextArrow.png" class="nextArrow"></span></button>

</div>
</body>
<script type="text/javascript">
let inOrout = sessionStorage.getItem('problemType'); 
if(inOrout.toString()=="Damages"|| inOrout.toString()=="OutFlood" ){
    document.getElementById("prevButton").attribute("onclick","location.href='Step3Out.php");
   
}else{
     document.getElementById("prevButton").attribute("onclick","location.href='Step3In.php");
}

</script>
</html>


