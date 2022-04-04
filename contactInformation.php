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
<p id = "step">Notifications (Optional)</p>
</div>

<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 


<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->
<hr align="left">

<div style="margin-top: 20px;" >
    <span class = "bold">Contact Information</span>
</div>

<div style="margin-top:5px;">
    <span class = "smallText">If you consent, DC Water will only be allowed to contact you about the content of this ticket.</span>
</div>

<div style="margin-top:20px;">
    <span class = "regText">I would like to receive updates about this ticket</span>
</div>

<div style="margin-top:22.5px; margin-left: 16px;">
   <form>
  <div class="checkboxes">
    <label><input type="checkbox"> <span>Phone Call</span></label>
    <label><input type="checkbox"> <span>Email</span></label>
  </div>
</form>
</div>

<hr align="left" style="color:#E8E8E8; background-color: #E8E8E8; margin-top: 20px;">

<div style="margin-top:20px;">
    <span class = "regText">DC Water can contact me with questions about this ticket</span>
</div>

<div style="margin-top:22.5px; margin-left: 16px;">
   <form>
  <div class="checkboxes">
    <label><input type="checkbox"> <span>Phone Call</span></label>
    <label><input type="checkbox"> <span>Email</span></label>
  </div>
</form>
</div>

<div style="margin-top:20px; margin-left: 16px;">
<label for="fname" class="boxLabel">Full Name</label>
<input type="text" id="fname" name="fname" class="tBox" placeholder="Enter Your Full Name Here...">   


</div>
<div style="margin-top:20px; margin-left: 16px;">
<label for="fname" class="boxLabel">Email</label>
<input type="text" id="fname" name="fname" class="tBox"  placeholder="Enter Your Email Address Here...">   


</div>

<div style="margin-top:20px; margin-left: 16px; margin-bottom: 100px;">
<label for="fname" class="boxLabel">Phone Number</label>
<input type="text" id="fname" name="fname" class="tBox" placeholder="Enter Your Phone Number Here...">   

</div>


<!--- PUT CONTENT HERE---> 

<div class="bottomNav">

<button onclick="#" type="button" class="prevButton"><span class="prevButtonText"><img src="Images/PrevArrow.png" class ="prevArrow">Back</span></button>
<button onclick="#" type="button" class="nextButton"><span class="nextButtonText">Next<img src="Images/nextArrow.png" class="nextArrow"></span></button>

</div>


</body>
</html>

