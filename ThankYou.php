<!DOCTYPE html>
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
img.checkmark {
margin: auto;
display: block;
width: 30%;
margin-top: 116.5px;
}

p.bolder{
text-align: center;
align-items: center;
margin: auto;
display: block;
width: 90%;
margin-top: 25px;
margin-left: 16px;
}

.checkmark{
text-align: center;
}

.sometext{
width: 343px;
height: 86px;
font-family: 'Fira Sans';
color: #2D2D2D;
text-align: center;
align-items: center;
margin-left: 16px;
}

.bolder{
font-weight: 700;
}

.button{
cursor: pointer;
width: 201px;
height: 17px;
border-radius: 6px;
padding: 18px 16px 24px 12px;
font-weight: 500;
font-size: 16px;
align-items: center;
text-align: center;
margin-left: 74px;
margin-right: 74px;
margin-top: 30px;
}

</style>
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
<!--- PUT CONTENT HERE--->

<div>
<img class = "checkmark" src="Images/Completed.png">
</div>

<div class = "sometext" style="margin-top:10px;font-weight:700;font-size:24px">
Thank You!
</div>

<div class = "sometext" style="margin-top:-50px;font-weight:400;font-size:18px">
Your form has been submitted.
<p class = "bolder">Please keep the following ticket number for your records: #</p>
</div>

<div class = "button" style="background-color:#0075C9;color:#FFFFFF">
View Ticket Status
</div>

<div class = "button" style="background-color:#FFFFFF;color:#0075C9;border:2px solid #0075C9; margin-top:10px">
Report Another Problem
</div>

<div class="bottomNav" style="margin-top:120px">
<button onclick="#" type="button"  class="prevButton"><span class="prevButtonText">Previous</span></button>
<button onclick="#" type="button" class="nextButton"><span class="nextButtonText">Next</span></button>
</div>
</div>
</body>
</html>
