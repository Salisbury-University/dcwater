

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
<div>
<p id="ReportAnEmergency">Report a Problem</p>
</div>

<div>
<p id = "step">Step 1 of 3</p>
</div>

<hr align="left">
<div class="WhatIsYourLocation">

    <p>What is your location?<span style="color:red"> *</span></p>
</div>
<div>
<form method="post">
<span><input type="text" method="post" name="ColorChange" id="ColorChange" class="InputLocation" placeholder="Enter Location..."
onkeyup="ChangeColor(); changeImage()"/>
</form>
<?php
if(isset($_POST['ColorChange']))
{
$_SESSION['location']=$_POST['ColorChange'];
echo $_SESSION['location'];
}
?>
<img src="Images/searchIcon.png" class="searchIcon" width=10/></span>
</div>  

<div>
<button onclick="showPosition(); " type="button"  class="UseLocButton"><span class="LocButtonText">Use my location</span>
<img src="Images/MapArrow.png"/></button>
<button onclick="#" type="button"   class="DropPinButton"><span class="LocButtonText">Drop a Pin</span>
<img src="Images/MapPin.png"/></button>

</div>

<div class="MapScreenshot">
<div id="googleMap" style="width:90%;height:400px;"></div>

<script>
function showPosition() {
        navigator.geolocation.getCurrentPosition(showMap);
    }
    
    function showMap(position) {
        // Get location data
        var latlong = position.coords.latitude + "," + position.coords.longitude;
        document.getElementById("ColorChange").value=latlong;
        var coordinates=latlong;
        
        
        // Set Google map source url
        var mapLink = "https://maps.googleapis.com/maps/api/staticmap?center="+latlong+"&zoom=16&size=400x300&output=embed";
        
        // Create and insert Google map
        document.getElementById("embedMap").innerHTML = "<img alt='Map Holder' src='"+ mapLink +"'>";
    }
</script>
</div>
  <div id="embedMap">
          <!--Google map will be embedded here-->
      </div>

<div class="bottomNav">
<button onclick="window.location='Begin.php'" type="button"  class="prevButton"><span class="prevButtonText">
<img img src="Images/ArrowBlue.png"class="Arrow-Blue"> 
&nbsp &nbsp &nbsp Back</span></button>
<button onclick="window.location='Step2.php'" type="submit" id="ForColor"class="nextButton"><span id="ForColorText" class="nextButtonText">
&nbsp &nbsp &nbsp
Next
<img name="arrowBlack" id="arrowBlack" img src="Images/ArrowBlack.png"class="Arrow-White"></span></button>
</div>
</body>
<script>
    document.getElementById("ForColorText").style.color = "Black";
    document.getElementById("ForColor").style.background = "#DDDDDD";

    function ChangeColor(){
      if (document.getElementById("ColorChange").value == "") {
         document.getElementById("ForColor").style.background = "#DDDDDD";
      } else {
         document.getElementById("ForColor").style.background = "#0075C9";
      }
      if (document.getElementById("ColorChange").value == "") {
         document.getElementById("ForColorText").style.color = "Black";
      } else {
         document.getElementById("ForColorText").style.color = "White";
      }
    }


</script>
<script>
        function changeImage() {
            var Image_Id = document.getElementById('arrowBlack');
            if (Image_Id.src.match("Images/ArrowBlack.png")) {
                Image_Id.src = "Images/ArrowWhite.png";
            }
            if (document.getElementById('ColorChange').value== "")
            {
              Image_Id.src = "Images/ArrowBlack.png";
            }
        }    
    </script>
</html>