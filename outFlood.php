<?php

session_start(); 

?>
<!DOCTYPE html> 
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <form>
     <ul class="ks-cboxtags">
        <li><input type="checkbox" name ="location[]" id="checkboxOne" value="Street Flood"><label for="checkboxOne">Street Flood</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxTwo" value="Blocked Drain"><label for="checkboxTwo">Blocked Drain</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxThree" value="Flash Flood"><label for="checkboxThree">Flash Flood</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxFour" value="Main Break"><label for="checkboxFour">Main Break</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxFive" value="Rain"><label for="checkboxFive">Rain</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxSix" value="Running Water"><label for="checkboxSix">Running Water</label></li>
    </ul>
  </form>
    <script type="text/javascript">
    $(document).ready(function () {
var details = " "
        $('#checkboxOne').change(function () {
            if (this.checked){
                details += $('#checkboxOne').val() + " ";
                alert(details);
                sessionStorage.setItem('details',details);
                
            }else{
                details = details.replaceAll($('#checkboxOne').val(), '');
                alert(details);
                sessionStorage.setItem('details',details);
            }
        });
        $('#checkboxTwo').change(function () {
            if (this.checked){
                details += $('#checkboxTwo').val()  + " ";
                alert(details);
                sessionStorage.setItem('details',details);

            }else{
                details = details.replaceAll($('#checkboxTwo').val(), '');
                alert(details);
                sessionStorage.setItem('details',details);
            }
        });

         $('#checkboxThree').change(function () {
            if (this.checked){
                details += $('#checkboxThree').val() + " ";
                alert(details);
                sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxThree').val(), '');
                alert(details);
                 sessionStorage.setItem('details',details);
            }
        });
          $('#checkboxFour').change(function () {
            if (this.checked){
                details += $('#checkboxFour').val()  + " ";
                alert(details);
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxFour').val(), '');
                alert(details);
                 sessionStorage.setItem('details',details);
            }
        });
          $('#checkboxFive').change(function () {
            if (this.checked){
                details += $('#checkboxFive').val()  + " ";
                alert(details);
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxFive').val(), '');
                alert(details);
                 sessionStorage.setItem('details',details);
            }
        });
          $('#checkboxSix').change(function () {
            if (this.checked){
                details += $('#checkboxSix').val() + " ";
                alert(details);
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxSix').val(), '');
                alert(details);
                sessionStorage.setItem('details',details);

            }
        });
 

    });
    </script>
</body>
</html>