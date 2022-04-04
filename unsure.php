<!DOCTYPE html> 
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
<button onclick="#" type="button" class="greyButton"><span class="greyButtonText"><img src="Images/Camera.png" style="margin-right:10px;">Take A Photo</span></button>
<button onclick="#" type="button" class="greyButton"><span class="greyButtonText"><img src="Images/upload.png" style="margin-right:10px;">Upload</span></button>
</div>

<div style="margin-top:20px;">
     <span class = "bold">Desription<span style="color:red;">*</span></span>
</div>

<div style="margin-top:20px; margin-left: 16px;">
     <textarea class="descriptionBox" placeholder="Enter Text Here...."></textarea>
</div>




<div class="bottomNav">

<button onclick="#" type="button"  class="prevButton"><span class="prevButtonText"><img src="Images/PrevArrow.png" class ="prevArrow">Back</span></button>
<button onclick="#" type="button" class="nextButton"><span class="nextButtonText">Next <img src="Images/nextArrow.png" class="nextArrow"></span></button>

</div>


</body>
</html>


