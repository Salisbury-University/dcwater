<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

p.rando{
margin-top: 0.3em;
}

.where{
width: 245px;
height: 29px;
left: 0px;
top: 0px;

font-family: 'Fira Sans', sans-serif;
font-style: normal;
font-weight: 700;
font-size: 21.5px;
line-height: 29px;

display: flex;
align-items: center;
flex: none;
order: 1;
flex-grow: 0;
margin: 0px 8px;

color: #2D2D2D;
}

.asterisk{
font-family: 'Fira Sans', sans-serif;
color: #D90514;
font-size: 18px;
}

.button{
font-family: 'Fira Sans', sans-serif;
cursor: pointer;
position: relative;
width: 238px;
height: 70px;
background-color: #EFEFEF;
color: #00528C;
border-radius: 16px 16px 16px 16px;
right: 76.68%;
left: 10px;
top: 10px;
font-size: 18px;
padding-left: 100px;
padding-top: 10px;
padding-right: 17px;
padding-bottom: 10px;
}

.button:active{
background-color: #8EBDE0;
}

.halfbutton{
cursor: pointer;
position: relative;
background-color: #8EBDE0;
width: 80px;
height: 90px;
border-radius: 16px 0px 0px 16px;
left: 10px;
top: -80px;
}

.icon{
position: relative;
top: 25%;
left: 25%;
}

.rando{
font-size: 16px;
color: #2D2D2D;
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
<div>
<p id="ReportAnEmergency">Report a problem</p>
</div>


<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Step 3 of 3</p>
</div>
<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<div>

<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->
<hr align="left">

<p class = "where">Where is the Problem?<span class = "asterisk">*</span></p>

<!--- PUT CONTENT HERE--->

<div class = "button">
Flooding / Leaking
<p class = "rando">Report an excess of water or water flow issue</p>
</div>
<div class = "halfbutton">
<img class = "icon" src="Images/IndoorFlood.png">
</div>

<div class = "button" style="margin-top:-75px">
Water Pressure
<p class = "rando">Report a low water pressure issue</p>
</div>
<div class = "halfbutton">
<img class = "icon" src="Images/Pressure.png">
</div>

<div class = "button" style="margin-top:-75px">
No Water
<p class = "rando">Report a water outage or access issue</p>
</div>
<div class = "halfbutton">
<img class = "icon" src="Images/NoWater.png">
</div>

<div class = "button" style="margin-top:-75px">
Water Quality
<p class = "rando">Report discolored, polluted, or cloudy water</p>
</div>
<div class = "halfbutton">
<img class = "icon" src="Images/PoorQuality.png">
</div>

<div class = "button" style="margin-top:-75px">
Other
<p class = "rando">Select this option if the above categories don't apply</p>
</div>
<div class = "halfbutton">
<img class = "icon" src="Images/Other.png">
</div>

<div class="bottomNav" style="margin-top:250px">
<button onclick="#" type="button"  class="prevButton"><span class="prevButtonText"><img class="prevArrow" src="Images/ArrowBlue.png">Back</span></button>
<button onclick="#" type="button" class="nextButton"><span class="nextButtonText">Next<img class="nextArrow" src="Images/ArrowWhite.png"></span></button>
</div>

</body>
</html>
