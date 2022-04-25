<!DOCTYPE html> 
<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css">
    <link href="navbarFormat.css" rel="stylesheet" type="text/css">
    <link href="footerFormat.css" rel="stylesheet" type="text/css" >
    <link href="progressBarFormat.css" rel="stylesheet" type ="text/css">
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
<p id="ReportAnEmergency">Report an Emergency</p>
</div>


<!---THIS IS THE TEXT UNDER REPORT AN EMERGENCY ---> 
<div>
<p id = "step">Ticket Status</p>
</div>
<hr align="left">

<div style="margin-top: 20px; margin-left: 16px;">

<span class = "smallBold">Tracking Number:</span>
    
</div>

<div style="margin-top: 4px; margin-left: 16px;">
    
<span class="trackText">2694570030</span>

</div>

<div style="margin-top:18px; margin-left:16px;" class="grid-container">

<!--- SECTION WILL BE FINISHED WHEN THE DATABASE IS READY  --->
    <div class="field">
    <div class="progBar activeBar" ></div>
    <div class="progLabel activeLabel">Ticket Opened</div>
    </div>

    <div class="field">
    <div class="progBar"></div>
    <div class="progLabel " >Under Review</div>
    </div>


    <div class="field">
    <div  class="progBar"></div>
    <div class="progLabel">Repair in progress</div>
    </div>

    <div class="field">
    <div class="progBar"></div>
    <div class="progLabel">Ticket Closed</div>
    </div>
</div>

<div style="margin-top: 20px; margin-left:16px;">

   <span class = "smallBold">Next Steps</span> 

</div>

<div class="nextSteps" style="margin-left: 16px;">

    <p>DC Water has dispatched a field crew to work on repairs.</p>
    <p>Please feel free to refer back to this confirmation page for updates to the case. You may also reach us at (202) 612-3400.</p>
    
</div>

<div style="margin-left: 16px; margin-top: 20px;" id="buttonDiv">
    <button id="caseHistoryAction" type="button" class ="caseButton active">Case History</button>
    <button id="ticketHistoryAction" type="button" class = "caseButton">Ticket History</button>
</div>

<div id="textData" style="margin-top: 25px;">  
</div>

<div style="margin-top:35px; margin-bottom: 40px;">
    <button type="button" class="anotherReport">Report Another Problem</button> 
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
         $("#textData").load("caseHistory.php");
        $("#caseHistoryAction").click(function (e) {
            $("#textData").load("caseHistory.php");
        }); 
        $("#ticketHistoryAction").click(function (a) {
            $("#textData").load("ticketHistory.php");
        });

    });
var btnContainer = document.getElementById("buttonDiv");

var btns = btnContainer.getElementsByClassName("caseButton");

for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

</script>

</html>
