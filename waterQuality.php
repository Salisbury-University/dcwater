<?php

session_start(); 

?>
<!DOCTYPE html> 
<html>
<head>
    <link href="styles.css" rel="stylesheet" type="text/css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
     <ul class="ks-cboxtags">
        <li><input type="checkbox" name ="location[]" id="checkboxOne" value="Dirty"><label for="checkboxOne">Dirty</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxTwo" value="Cloudy"><label for="checkboxTwo">Cloudy</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxThree" value="Smelly"><label for="checkboxThree">Smelly</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxFour" value="Odor"><label for="checkboxFour">Odor</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxFive" value="Water Taste"><label for="checkboxFive">Water Taste</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxSix" value="Contaminated"><label for="checkboxSix">Contaminated</label></li>
        <li><input type="checkbox" name ="location[]" id="checkboxSeven" value="Polluted"><label for="checkboxSeven">Polluted</label></li>

    </ul>
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
         $('#checkboxSeven').change(function () {
            if (this.checked){
                details += $('#checkboxSeven').val() + " ";
                alert(details);
                 sessionStorage.setItem('details',details);
            }else{
                details = details.replaceAll($('#checkboxSeven').val(), '');
                alert(details);
                sessionStorage.setItem('details',details);

            }
        });
    });      
    </script>
</body>
</html>