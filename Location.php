<!DOCTYPE html> 
<html>
<head>
	<link href="Location.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerformatLocation.css" rel="stylesheet" type="text/css" >
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
<p id = "step">Step 1 of 3</p>
</div>
<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<hr align="left">
<div class="WhatIsYourLocation">
<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->
    <p>What is your location?<span style="color:red"> *</span></p>
</div>
<div>
<span><input type="text" id="ColorChange" class="InputLocation" placeholder="Enter Location..."
onkeyup="ChangeColor()"/>
<img src="Images/searchIcon.png" class="searchIcon" width=10/></span>
</div>  

<div>
<button onclick="#" type="button"  class="UseLocButton"><span class="LocButtonText">Use my location</span>
<img src="Images/MapArrow.png"/></button>
<button onclick="#" type="button"   class="DropPinButton"><span class="LocButtonText">Drop a Pin</span>
<img src="Images/MapPin.png"/></button>

</div>

<div class="MapScreenshot">
<img src="Images/MapScreenshot.png"/>
</div>

<div class="bottomNav">
<button onclick="#" type="button"  class="prevButton"><span class="prevButtonText">
<img img src="Images/ArrowBlue.png"class="Arrow-Blue"> 
&nbsp &nbsp &nbsp Back</span></button>
<button onclick="#" type="button" id="ForColor"class="nextButton"><span class="nextButtonText">
&nbsp &nbsp &nbsp
Next
<img img src="Images/ArrowWhite.png"class="Arrow-White"></span></button>

</div>
</body>
<script>

    document.getElementById("ForColor").style.background = "Gray";
    function ChangeColor(){
      if (document.getElementById("ColorChange").value == "") {
         document.getElementById("ForColor").style.background = "Gray";
      } else {
         document.getElementById("ForColor").style.background = "#0075C9";
      }
    }
</script>
</html>