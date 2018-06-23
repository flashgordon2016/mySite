<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="../styles/custom.css">
    <title>M. Gordon Morse</title>
  </head>
  <body class="light-mode">
    <?php include("./shared/topnav.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
      //Credit https://harlemsquirrel.github.io/css/javascript/2017/01/31/dark-light-mode-switcher.html
      function toggleBackground(){
        //Toggle black/white
        $('body').toggleClass('light-mode dark-mode');
        //Navbar
        $('#top-menu').toggleClass('navbar-dark bg-dark navbar-light bg-light');
        //Buttons
        //Credit: https://stackoverflow.com/questions/7002039/easiest-way-to-toggle-2-classes-in-jquery
        $('#light-btn').toggle();
        $('#dark-btn').toggle();
        $('.btn').toggleClass('btn-outline-light btn-outline-dark');
        //SVGS (done)
        //Set session variable accordingly
      }

      $(document).ready(function(){
        //Listener for click of dark/light button
        $('#light-btn').on('click', toggleBackground);
        $('#dark-btn').on('click', toggleBackground);
      });
    </script>
  </body>
</html>
