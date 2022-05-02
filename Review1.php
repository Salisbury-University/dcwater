<?php
session_start();
$s = $_SESSION['User'];
if (isset($s))
{
//do nothing
} else {
header("location:http://localhost/COSC425/Begin.php");
}
?>
<!DOCTYPE html> 
<html>
<head>
	<link href="Review.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormatReview.css" rel="stylesheet" type="text/css" >
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
<p id="ReportAnEmergency">Report a Problem
    
    
</p>
</div>

<!------------------------------ <span style="color:red">*</span> --->
<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Review</p>
</div>

<!--- THE CONTENT DEPENDS ON THE PAGE. SOME PAGES DONT EVEN 
HAVE THIS TEXT SO CHECK WITH THE PAGE> ---> 
<div>

<!--- This is the partial line under the notifications tab and above the content
    of the page. When editing this template, make sure the page has this because 
    some pages do not --->

<hr align="left">

</div>

<div class="Box1" >
<img src="Images/LeftSideBox.png"class="LeftSideBox1">
<img src="Images/Pencil.png"class="Pencil1">
<span onclick="window.location='Location.php'" class="Edit1"> Edit </span>
</div>

<div class="Location">
Location:
</div>

<div id= "FirstTextBox" class="FirstTextBox" readonly>
<?php
if (isset($_SESSION['location']))
{
echo $_SESSION['location'];   
} else {
header("location:http://localhost/COSC425/Begin.php");
}
?><br>  
</div>

<div>
<img src="Images/MapReviewScreenshot.png" class = "MapReviewScreenshot">
</div>

<div class="Box2">
<img src="Images/LeftSideBox.png"class="LeftSideBox2">
<img src="Images/Pencil.png"class="Pencil2">
<span onclick="window.location='###'"class="Edit2"> Edit </span>
</div>

<div class="Issue">
<span>Issue:</span>
</div>

<div class="SecondBoxText">
<?php
if (isset($_SESSION['problemType']))
{
echo $_SESSION['problemType'];   
} else {
//header("location:http://localhost/COSC425/Begin.php");
}
?>
</div>



<div class="Box3">
<img src="Images/LeftSideBox.png"class="LeftSideBox3">
<img src="Images/Pencil.png"class="Pencil3">
<span onclick="window.location='###'" class="Edit3"> Edit </span>
</div>

<div class="PhotosAndVideos">
<span>Photos & Videos:</span>
</div>
<div class="ThirdBoxText">
<?php
if (isset($_SESSION['photos']))
{
echo $_SESSION['photos'];   
} else {
//header("location:http://localhost/COSC425/Begin.php");
}
?>
</div>




<div class="ScrollFunction">
</div>

<div class="bottomNav">

<button onclick="window.location='contactInformation.php'" type="button"  class="prevButton">
<span> 
<img src="Images/ArrowBlue.png" class="BlueArrow">
</span>
<span class="Back"> Back
</span>
</button>
<button onclick="window.location='ThankYou.php'" type="button" class="nextButton">
<span class="Next">Next</span>
<span> 
<img src="Images/ArrowWhite.png" class="WhiteArrow">
</span>
</button>

</div>

</body>
</html>

