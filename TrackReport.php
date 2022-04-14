<!DOCTYPE html> 
<html>
<head>
	<link href="TrackReport.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerformatTrackRep.css" rel="stylesheet" type="text/css" >
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
<p id="ReportAnEmergency">Track Your Report</p>
</div>
<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Track Your Report</p>
</div>
<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<hr align="left">
<div class="WhatIsYourLocation">
<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->
    <p>Enter your ticket number</p>
</div>
<div>
<input type="text" id="ColorChange"class="InputLocation" placeholder="Enter ticket number here..."
onkeyup="ChangeColor()"/>

</div>

<div class="TrackReportParagraph">
If you provided your contact information in the Report a Problem form, 
you should have received an email from DC Water with your ticket number.
<br><br> 
If you have difficulty finding your tracking number, you can call us at 
(202) 612-3400 or reach out on Twitter @dcwater.
</div>
<div class="bottomNav">
<button onclick="#" type="button" class="prevButton"><span class="prevButtonText">Report a Problem</span></button>
<button onclick="#" type="button" id="ForColor" class="nextButton">
<span id="ForColorText" class="TrackEnd">Track</span>
<span> 
<img src="Images/ArrowWhite.png" class="WhiteArrow">
</span></button> 
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