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
    <nav class="navbar navbar-light bg-light justify-content-end" id="top-menu">
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
        <button class="btn btn-outline-dark mr-3" type="submit">
          <?php include("../images/Octicons/search.svg"); ?>
          <span class="btn-txt">
            &nbsp;search
          </span>
        </button>
      </form>
      <button id="dark-btn" class="btn btn-outline-dark top-nav-btn">
        <?php include("../images/Octicons/telescope.svg"); ?>
        &nbsp;<span id="btn-txt">dark</span>
      </button>
      <button id="light-btn" class="btn btn-outline-dark top-nav-btn" style="display:none;">
        <?php include("../images/Octicons/light-bulb.svg"); ?>
        &nbsp;<span id="btn-txt">light</span>
      </button>
    </nav>
    <!-- Credit: https://medium.com/wdstack/bootstrap-4-vertical-center-1211448a2eff -->
  <div class="row h-100">
     <div class="col-sm-12 my-auto">
       <div class="text-center mx-auto w-75">
         <h1><strong>M. Gordon Morse</strong></h1>
         <h4>Full-Stack Web Developer</h4>
         <p>-.- -. --- .-- .-.. . -.. --. . / .. ... / .--. --- .-- . .-.</p>
         <ul class="nav justify-content-center mb-3">
            <li class="nav-item mr-4">
              <a class="btn btn-outline-dark" href="./about-me.php">about me</a>
            </li>
            <li class="nav-item mr-4">
              <a class="btn btn-outline-dark" href="#">projects</a>
            </li>
            <li class="nav-item mr-4">
              <a class="btn btn-outline-dark" href="#">blog</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-outline-dark" href="#">contact me</a>
            </li>
          </ul>
       </div>
     </div>
   </div>

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
