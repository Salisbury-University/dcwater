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
    <li><a href="https://dcwater.com/" id="image"><img src="dcWaterLogo.png"></a></li>
    <li><a href="#"><img src="searchIcon.png"></a></li>
    <li><a href="#"><img src="menuIcon.png"></a></li>
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
<input type="text" class="InputLocation" placeholder="Enter Location..."/>
<img src="searchIcon.png" width=10/>
</div>

<div>
<button onclick="#" type="button"  class="UseLocButton"><span class="LocButtonText">Use my location</span>
<img src="MapArrow.png"/></button>
<button onclick="#" type="button"   class="DropPinButton"><span class="LocButtonText">Drop a Pin</span>
<img src="MapPin.png"/></button>

</div>

<div class="MapScreenshot">
<img src="MapScreenshot.png"/>
</div>

<div class="bottomNav">
<button onclick="#" type="button"  class="prevButton"><span class="prevButtonText">
<img img src="ArrowBlue.png"class="Arrow-Blue"> 
&nbsp &nbsp &nbsp Back</span></button>
<button onclick="#" type="button" class="nextButton"><span class="nextButtonText">
&nbsp &nbsp &nbsp
Next &nbsp
<img img src="ArrowBlack.png"class="Arrow-Black"></span></button>

</div>
</body>
</html>