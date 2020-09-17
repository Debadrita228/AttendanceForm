<?php
    require("library/connect.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <link rel="stylesheet" href="css/style.css">
    <title>Redirect - Attendance Submitted</title>
    <script>
        function pageRedirect() {
            window.location.replace("https://ecehrmattendance.000webhostapp.com/");
        }      
        setTimeout("pageRedirect()", 5000);
    </script>
    
  </head>
  <!--<body onload = "JavaScript:AutoRefresh(60000);">-->
      
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand mr-auto ml-auto" href="#">HRM ATTENDANCE FORM</a>
      
  </nav>
      <div class="container text-center mt-5 pt-3 pb-3 mb-5 sorry text-white">
        <div class="error">
            <h2>Attendance Recorded Successfully!</h2><br>
            <h3><a href="index">Click here</a>, if you are not automatically redirected to the Home Page.</h3>
        </div>
      </div>
      <?php
      include 'library/footer.php';
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        /* To Disable Inspect Element */
        $(document).bind("contextmenu",function(e) {
         e.preventDefault();
         alert("Right Click Facilities are disabled.");
        });
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
            alert("Right Click Facilities are disabled.");
            return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
            alert("Right Click Facilities are disabled.");
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
            alert("Right Click Facilities are disabled.");
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
            alert("Right Click Facilities are disabled.");
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
            alert("Right Click Facilities are disabled.");
            return false;
            }
            if(e.ctrlKey && e.keyCode == 'F'.charCodeAt(0)){
            alert("Right Click Facilities are disabled.");
            return false;
            }
        }
</script>
<!--<script type="text/javascript" src="js/refresher.js"></script>-->
  </body>
</html>